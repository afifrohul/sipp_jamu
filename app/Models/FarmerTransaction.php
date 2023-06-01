<?php

namespace App\Models;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerTransaction extends Model
{
    use HasFactory;
    protected $table = 'farmer_transactions';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    // protected static function booted()
    // {
    //     static::saved(function ($transaksi) {
    //         $material = Material::find($transaksi->material_id);
    //         $material->stock -= $transaksi->qty;
    //         $material->save();
    //     });
    // }
    // protected static function booted()
    // {
    //     static::updated(function ($transaksi) {
    //         if ($transaksi->isDirty('status_accept') && $transaksi->status_accept === 'paid') {
    //             $product = $transaksi->product;
    //             $product->stock -= $transaksi->qty;
    //             $product->save();
    //         }
    //     });
    // }
}
