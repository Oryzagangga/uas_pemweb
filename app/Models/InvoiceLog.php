<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'invoice_id',
        'qty',
        'total'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
