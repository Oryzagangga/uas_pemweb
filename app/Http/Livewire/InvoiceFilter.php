<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class InvoiceFilter extends Component
{
    public $cashiers = [];

    public $cashier = '*';
    public $date;

    public function mount()
    {
        $this->cashiers = User::all();
        $this->date = Carbon::now()->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.invoice-filter');
    }

    public function updatedCashier()
    {
        $this->emit('onCashierChange', $this->cashier);
    }

    public function updatedDate()
    {
        $this->emit('onDateChange', $this->date);
    }
}
