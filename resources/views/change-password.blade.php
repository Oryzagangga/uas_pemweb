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
                    <form method="post" action="{{ route('changePassword.store') }}">
                        @csrf
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input name="password_confirmation" type="text" class="form-control" id="password_confirmation">
                        </div>
                        <div class="bbb">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
