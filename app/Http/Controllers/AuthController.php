<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
       // اعتبارسنجی شماره موبایل به تنهایی
        $phoneValidator = Validator::make($request->only('phone'), [
            'phone' => 'required|regex:/^09\d{9}$/',
        ]);

        if ($phoneValidator->fails()) {
            return back()->with('phone_error', 'لطفاً شماره موبایل معتبر وارد کنید.');
        }

        // اعتبارسنجی کدهای ورودی (OTP)
        $otpValidator = Validator::make($request->only('input1', 'input2', 'input3', 'input4', 'input5'), [
            'input1' => 'required|digits:1',
            'input2' => 'required|digits:1',
            'input3' => 'required|digits:1',
            'input4' => 'required|digits:1',
            'input5' => 'required|digits:1',
        ]);

        if ($otpValidator->fails()) {
            return back()->with('otp_error', 'کد ورود معتبر نیست!');
        }

        // ادامه روند بررسی OTP
        $phone = $request->phone;
        $enteredOtp = $request->input1 . $request->input2 . $request->input3 . $request->input4 . $request->input5;

        $cachedOtp = Cache::get('otp_' . $phone);

        if (!$cachedOtp || $enteredOtp != $cachedOtp) {
            return back()->with('otp_error', 'کد ورود معتبر نیست!');
        }

        // حذف کد OTP بعد از استفاده
        Cache::forget('otp_' . $phone);

        // ورود یا ایجاد کاربر
        $user = User::firstOrCreate(
            ['phone' => $phone],
            ['name' => 'کاربر جدید'],
            
        );
        if ($user->wasRecentlyCreated && !$user->type) {
            $user->type = 'user';
            $user->save();
        }

        Auth::login($user, true); // با remember me

        // تمدید کوکی لاگین برای 30 روز
        $this->setPersistentLoginCookie();

        if ($user->type === 'user') {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('cms.dashboard');
        }

    }
    public function loginPage(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->type === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                return redirect()->route('cms.dashboard');
            }
        }

        return view('pages.login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
    }

    protected function setPersistentLoginCookie()
    {
        $cookieName = Auth::getRecallerName(); // default: remember_web_...

        // اگر کاربر لاگین است و کوکی موجود است، آن را دوباره تنظیم می‌کنیم
        if (Auth::check() && request()->hasCookie($cookieName)) {
            cookie()->queue(cookie(
                $cookieName,
                request()->cookie($cookieName),
                60 * 24 * 30 // دقیقه: 30 روز
            ));
        }
    }

    public function getOtpCode(Request $request)
    {

        $phone = $request->phone;

        if (Cache::has('otp_' . $phone)) {
            $otp = Cache::get('otp_' . $phone);
            dd('کد ورود برای شماره '.$phone.': '.$otp);
        } else {
            dd('کد ورود برای این شماره ارسال نشده یا منقضی شده است.');
        }
    }
    // Auth Check Phone Number API

    public function checkPhoneNumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^09\d{9}$/'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'شماره تلفن معتبر نیست',
                'errors' => $validator->errors()
            ], 422);
        }
        $phone = $request->phone;
        $otp = rand(10000, 99999);

        Cache::put('otp_' . $phone, $otp, now()->addMinutes(2));

        return response()->json([
            'success' => true,
        ]);
    }
    
    

}
