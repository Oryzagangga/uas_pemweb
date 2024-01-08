@extends('layouts.master')

@section('title', 'Invoices')

@section('content')
    @php
        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
    @endphp
    @include('partials.navbar')
    <div class="invoice-container">
    <div class="invoice-header-container">
        <div class="invoice-title-container">
            <h1>Invoice</h1>
        </div>
        <div>
            <p>Bandung, {{ \Carbon\Carbon::parse($invoice->created_at)->translatedFormat('d M Y') }}</p>
            <p>Kepada Yth, {{ $invoice->customer }}</p>
            <p>No. Nota N-12321312</p>
        </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Harga</th>
                <th>Banyaknya</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice->logs as $log)
                <tr class="centered-text">
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $log->product->name }}</td>
                    <td>{{ $cf->format($log->product->price) }}</td>
                    <td>{{ $log->qty }}</td>
                    <td>{{ $cf->format($log->product->price * $log->qty) }}</td>
                </tr>
            @endforeach
            @for($i = $invoice->logs->count() + 1; $i <= 10; $i++)
                <tr>
                    <td class="centered-text">
                        {{ $i }}
                    </td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                </tr>
            @endfor
        </tbody>
        <tfoot>
            <tr>
                <th class="invoice-footer" colspan="3">Terbilang: Rupiah</th>
                <th class="invoice-footer" colspan="2">Total: Rp. {{ $cf->format($invoice->grandTotal) }}</th>
            </tr>
        </tfoot>
    </table>
    <div class="invoice-footer-container">
        <div>
            <p>Perhatian</p>
            <p>Barang yang sudah dibeli tidak bisa dikembalikan</p>
        </div>
        <div>
            <p>Hormat kami, {{ $invoice->user->name }}</p>
        </div>
    </div>
    </div>
@endsection
