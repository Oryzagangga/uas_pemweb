<?php

namespace App\Http\Livewire;

use App\Models\InvoiceLog;
use App\Models\OngoingInvoice;
use App\Models\Product;
use Faker\Core\Number;
use Livewire\Component;
use NumberFormatter;

class CashierLog extends Component
{
    protected $listeners = ['logAdded'];

    public $logs = [];

    public function render()
    {
        return view('livewire.cashier-log');
    }

    public function logAdded(string $customer, int $productId, int $qty, int $ongoingInvoiceId)
    {
        $product = Product::find($productId);
        assert(!is_null($product));

        $ongoingInvoice = OngoingInvoice::find($ongoingInvoiceId);
        assert(!is_null($ongoingInvoice));

        $ongoingInvoice->update(['customer' => $customer]);

        $ongoingInvoice->logs()->create([
            'product_id' => $product->id,
            'qty' => $qty,
            'total' => $product->price * $qty
        ]);

        $this->logs = $ongoingInvoice->logs;

        $grandTotal = $this->logs->sum(function (InvoiceLog $log) {
            return $log->total;
        });

        $this->emit('grandTotalChanged', $grandTotal, $ongoingInvoiceId);
    }
}
