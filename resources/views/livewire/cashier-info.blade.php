<div class="cashier-info-container">
    <div class="action-container">
        <button class="btn btn-outline-primary" wire:click="onCancelClick">Batal</button>
        <button class="btn btn-primary" wire:click="onSubmitClick">Submit</button>
        <button class="btn btn-danger" wire:click="onLogoutClick">Logout</button>
    </div>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div class="cashier-info-field" style="align-items: center">
            <label for="grand-total">Grand total</label>
            <div class="p-2 rounded">
                <span>Rp.</span>
                <input type="text" id="grand-total" disabled value="{{ number_format($grandTotal, 2, ',', '.') }}">
            </div>
        </div>
        <div class="cashier-info-field bayar" style="align-items: center">
            <label for="bayar">Bayar</label>
            <div class="p-2">
                <span>Rp.</span>
                <input type="number" id="bayar" wire:model="payAmount">
            </div>
        </div>
        <div class="cashier-info-field" style="align-items: center">
            <label for="kembali">Kembali</label>
            <div class="p-2 rounded">
                <span>Rp.</span>
                @php
                    $exchange = (int)$payAmount - $grandTotal;
                    if ($exchange < 0) {
                        $exchange = 0;
                    }
                @endphp
                <input type="text" id="kembali"  value="{{ number_format($exchange, 2, ',', '.') }}"  disabled>
            </div>
        </div>
    </div>
</div>
