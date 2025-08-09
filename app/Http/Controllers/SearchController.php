<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        // آرایه‌ای از داده‌های فرضی
        $data = [
            ['id' => 1, 'name' => 'موبایل سامسونگ'],
            ['id' => 2, 'name' => 'رنگ مو مشکی'],
            ['id' => 3, 'name' => 'ماکس مو مردانه'],
            ['id' => 4, 'name' => 'هدست'],
            ['id' => 5, 'name' => 'کیبورد'],
            ['id' => 6, 'name' => 'موس'],
            ['id' => 7, 'name' => 'ماوس پد'],
            ['id' => 8, 'name' => 'موچین'],
        ];

        // اگر query خالی بود، خروجی خالی برگردون
        if (!$query || strlen(trim($query)) < 1) {
            return response()->json([]);
        }

        // فیلتر کردن نتایج که عبارت مورد نظر در نام‌شون باشه
        $filtered = array_filter($data, function ($item) use ($query) {
            return mb_stripos($item['name'], $query) !== false;
        });

        // گرفتن حداکثر 10 نتیجه
        $results = array_slice(array_values($filtered), 0, 10);

        return response()->json($results);
    }
}
