@extends('layouts.master')

@section('title', 'Cashier')

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('content')
    @include('partials.navbar')
    <div class="cashier-wrapper">
        <h1 class="head-bang">Vania Store Cashier</h1>
        <div class="cashier-container-grid">
            @livewire('cashier-info')
            @livewire('cashier-log')
            @livewire('cashier-input', ['ongoingInvoiceId' => $ongoingInvoiceId])
        </div>
    </div>
@endsection
