<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0'
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('product.create')->with('createId', $product->id);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0'
        ]);

        if ($request->action === 'Delete') {
            $product->delete();
            return redirect()->route('product.index')->with('delete', 'success');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('product.edit', $product->id)->with('update', 'success');
    }
}
