<?php

namespace App\Http\Controllers;

use App\Models\OngoingInvoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
{
    public function index()
    {
        $products = Product::limit(10)->get();

        $ongoingInvoiceId = OngoingInvoice::create([
            'user_id' => Auth::user()->id
        ])->id;

        return view('cashier', compact('products', 'ongoingInvoiceId'));
    }
}
