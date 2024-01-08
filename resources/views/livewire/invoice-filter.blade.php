<div class="d-flex gap-3 mb-2">
    <div class="filter-w">
        <label for="filter-date">Per tanggal</label>
        <input wire:model="date" class="form-control" type="date" name="filter-date" id="filter-date">
    </div>
    <div class="filter-w">
        <label for="cashier">Cashier</label>
        <select wire:model="cashier" class="form-select" name="cashier" id="cashier">
            <option value="*">All</option>
            @foreach($cashiers as $cashier)
                <option value="{{ $cashier->id }}">{{ $cashier->name }}</option>
            @endforeach
        </select>
    </div>
</div>
