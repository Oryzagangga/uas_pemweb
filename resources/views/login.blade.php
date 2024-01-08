@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="full-size-container">
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('logo.png') }}" alt="App logo">
            </div>
            <form class="login-form" action="{{ route('login.store') }}" method="post">
                @csrf
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                @if(session('onChangedPassword'))
                    <p>{{ session('onChangedPassword') }}</p>
                @endif
                <h1>Login</h1>
                <div class="field-container">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="field-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="mb-2">
                    <a class="text-end" href="{{ route('forgotPassword.index') }}">Forgot password</a>
                </div>
                <button>Log in</button>
                <span class="d-block text-center mb-2">Or</span>
                <a href="{{ route('register.index') }}">Register</a>
            </form>
        </div>
    </div>
@endsection
