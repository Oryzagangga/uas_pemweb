@extends('layouts.master')

@section('title', 'Products')

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
            justify-content: end;
        }
    </style>
@endsection

@section('content')
    @include('partials.navbar')
    <div class="fpw-container">
        <div class="fpw-inner">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h2>Product</h2>
                        <p class="text-secondary">Add new product</p>
                    </div>
                    <form method="post" action="{{ route('product.store') }}">
                        @csrf
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if(session('createId'))
                            <div class="alert alert-success" role="alert">
                                Successfully added a new product. <a class="alert-link" href="{{ route('product.edit', session('createId')) }}">See detail</a>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" id="price">
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
