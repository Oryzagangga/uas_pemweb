@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <div class="full-size-container">
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('logo.png') }}" alt="App logo">
            </div>
            <form class="login-form" action="{{ route('register.store') }}" method="post">
                @csrf
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <h1>Register</h1>
                <div class="field-container mb-2">
                    <label for="role">Role</label>
                    <select class="form-select" name="role" id="role">
                        <option value="cashier">Cashier</option>
                        <option value="management">Management</option>
                    </select>
                </div>
                <div class="field-container">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="field-container">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="field-container">
                    <label for="hint">Hint</label>
                    <input type="text" name="hint" id="hint">
                </div>
                <div class="field-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <button>Register</button>
                <span class="d-block mb-2 text-center">Or</span>
                <a href="{{ route('login.index') }}">Login</a>
            </form>
        </div>
    </div>
@endsection
