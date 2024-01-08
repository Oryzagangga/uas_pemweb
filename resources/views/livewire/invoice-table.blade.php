@php
    $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
@endphp
<table class="table table-striped text-center table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Customer</th>
        <th scope="col">Cashier</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $invoice->customer }}</td>
            <td>{{ $invoice->user->name }}</td>
            <td>{{ $cf->format($invoice->grandTotal) }}</td>
            <td>
                <a href="{{ route('invoice.show', $invoice->id) }}">Lihat detail</a>
            </td>
        </tr>
    @endforeach
    @for($i = $invoices->count() + 1; $i <= 10; $i++)
        <tr>
            <th scope="row">{{ $i }}</th>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><br></td>
        </tr>
    @endfor
    </tbody>
</table>
