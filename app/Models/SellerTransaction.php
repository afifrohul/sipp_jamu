<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerTransaction extends Model
{
    use HasFactory;
    protected $table = 'seller_transactions';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    protected static function booted()
    {
        

        static::saved(function ($transaksi) {
            if ($transaksi->status_accept === 'cancel') {
                $product = Product::find($transaksi->product_id);
                $product->stock += $transaksi->qty;
                $product->save();
            } else {
                $product = Product::find($transaksi->product_id);
                $product->stock -= $transaksi->qty;
                $product->save();
            }

        });

        // static::saved(function ($transaksi) {
        //     $product = Product::find($transaksi->product_id);
        //     $product->stock -= $transaksi->qty;
        //     $product->save();
        // });
    }

    
}
