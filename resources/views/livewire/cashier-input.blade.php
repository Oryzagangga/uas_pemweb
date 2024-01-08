<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <table class="table table-striped table-bordered">
        <tr>
            <td>No. Transaksi</td>
            <td class="grayish right-text">N-00000001</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td class="grayish right-text">{{ \Carbon\Carbon::now()->translatedFormat('d M Y') }}</td>
        </tr>
        <tr>
            <td>
                <label for="customer">Customer</label>
            </td>
            <td>
                <input wire:model="customer" class="form-control text-end" type="text" name="customer" id="customer">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama-barang">Nama barang</label>
            </td>
            <td>
                <select wire:model="selectProductId" wire:change="onProductChange" class="form-select text-end"
                        id="nama-barang" name="nama-barang">
                    <option value="Select product">Select product</option>
                    @foreach($products as $product)
                        <option class="right-text" value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td class="grayish right-text">{{ $priceHtml }}</td>
        </tr>
        <tr>
            <td>
                <label for="banyaknya">Banyaknya</label>
            </td>
            <td>
                <input wire:model="qty" wire:input="onQtyChange()" class="form-control text-end" type="number"
                       name="banyaknya" id="banyaknya">
            </tdfw-input right-text>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td class="grayish right-text">{{ $totalPriceHtml }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-input-action-container">
                <button class="btn btn-primary" wire:click="onAddClick">Add</button>
            </td>
        </tr>
        <tr>
            <td>Total item</td>
            <td class="grayish right-text">{{ $qty }}</td>
        </tr>
    </table>
</div>
