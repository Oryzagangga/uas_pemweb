@extends('layouts.master')

@section('title', 'Invoices')

@section('styles')
    <style>
        .filter-w {
            width: 256px;
        }
    </style>
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('content')
    @include('partials.navbar')
    <div class="p-4">
        <h1>Invoices</h1>
    </div>
    <div class="px-4">
        @livewire('invoice-filter')
        <button class="btn btn-primary">Filter</button>
        <a class="btn btn-danger" href="{{ route('invoice.index') }}">Reset filter</a>
    </div>
    <div class="p-4">
        @livewire('invoice-table', ['invoices' => $invoices])
    </div>
@endsection
