@extends('layouts.master')

@section('styles')
    <style>
        .fpw-container {
            display: grid;
            place-items: center;
            margin-top: 4rem;
        }

        .fpw-inner {
            width: 512px;
        }

        .bbb {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
@endsection

@section('content')
    <div class="fpw-container">
        <div class="fpw-inner">
            <div class="card">
                <div class="card-body">
                    <h2>Change password</h2>
                    <form method="post" action="{{ route('forgotPassword.store') }}">
                        @csrf
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="hint" class="form-label">Hint</label>
                            <input name="hint" type="text" class="form-control" id="hint">
                        </div>
                        <div class="bbb">
                            <button type="submit" class="btn btn-primary">Next</button>
                            <a href="{{ route('login.index') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
