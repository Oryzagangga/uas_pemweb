<div class="cashier-log-container">
    <table class="table table-striped table-bordered text-center">
        <thead>
        <tr class="table-row-log-heading">
            <th>No</th>
            <th>Nama barang</th>
            <th>Harga</th>
            <th>Banyaknya</th>
            <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
        @php
            $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
        @endphp
        @foreach($logs as $log)
            <tr class="table-row-log">
                <td>
                    {{ $loop->index + 1 }}
                </td>
                <td>
                    {{ $log->product->name }}
                </td>
                <td>
                    {{ $cf->format($log->product->price) }}
                </td>
                <td>
                    {{ $log->qty }}
                </td>
                <td>
                    {{ $cf->format($log->total) }}
                </td>
            </tr>
        @endforeach
        @for($i = 0; $i < 10 - count($logs); $i++)
            <tr class="table-row-log">
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
