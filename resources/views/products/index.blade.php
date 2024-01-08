@extends('layouts.master')

@section('title', 'Products')

@section('content')
    @php
        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
    @endphp
    @include('partials.navbar')
    <div class="p-4">
        <h1>Products</h1>
    </div>
    @if(auth()->user()->role === 'management')
        <div class="px-4">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Add product</a>
        </div>
    @endif
    <div class="p-4">
        @if(session('delete'))
            <div class="alert alert-success" role="alert">
                Successfully deleted product.
            </div>
        @endif
        <table class="table table-striped text-center table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Added At</th>
                @if(auth()->user()->role === 'management')
                    <th scope="col">Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $cf->format($product->price) }}</td>
                    <td>{{ $product->created_at }}</td>
                    @if(auth()->user()->role === 'management')
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                        </td>
                    @endif
                </tr>
            @endforeach
            @for($i = $products->count() + 1; $i <= 10; $i++)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    @if(auth()->user()->role === 'management')
                        <td><br></td>
                    @endif
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
@endsection
