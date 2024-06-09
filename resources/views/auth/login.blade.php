@extends('layouts.app')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Custom CSS -->
<style>
    body {
        background-image: url('hgfdghj.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Background fixed */
    }
    
    .limiter {
        width: 100%;
        margin: 0 auto;
        padding: 0 20px; /* Adjust the padding as needed */
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        min-height: 100vh;
    }

    .container-login100 {
        width: 60%; /* Adjust the width as needed */
        max-width: 400px; /* Limit the maximum width */
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        margin-left: 333px; /* Move a little more to the right */
        margin-top: 111px; /* Move a little further down */
        min-height: 66vh;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
    }

    .login100-form-title {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        margin-top: -10px; /* Moved a little more up */

    }

    .wrap-input100 {
        position: relative;
        width: 100%;
        margin-bottom: 30px;
    }

    .input100 {
        font-size: 16px;
        width: 100%;
        padding: 10px;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        background: transparent;
    }

    .focus-input100::before,
    .focus-input100::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #333;
        transition: all 0.4s;
    }

    .focus-input100::before {
        right: 50%;
    }

    .focus-input100::after {
        left: 50%;
    }

    .input100:focus + .focus-input100::before,
    .input100:focus + .focus-input100::after {
        width: 50%;
    }

    .container-login100-form-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 32px;
    }

    .login100-form-btn {
        font-size: 18px;
        color: #fff;
        background-color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login100-form-btn:hover {
        background-color: #555;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
    }

    .reset-link {
        text-align: center;
        margin-top: 10px;
    }
</style>

<div>
    <div class="container-login100">
        <span class="login100-form-title p-b-41">Account Login</span>
        <div class="wrap-login100 p-t-30 p-b-50">
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="email" placeholder="Email Address">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">Login</button>
                </div>
            </form>
            <div class="register-link">
                Don't have an account? <a href="{{ url('/register') }}">Register</a>
            </div>
            <div class="reset-link">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </div>
    </div>
</div>
@endsection
