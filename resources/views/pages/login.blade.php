@extends('layouts.main')
<style>
    .auth-continer{
        z-index: 1 !important;
    }
    .auth-model{
        max-width: auto !important;
        top:50% !important;
        position: fixed !important;
    }
    .auth-model .close-icon{
        display: none !important;
    }

</style>
@section('content')
    <div class="content" >
        @include('layouts.auth-modal')
    </div>
@endsection