<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class);
    }
    
    public function product_galleries()
    {
        return $this->belongsTo(ProductGallery::class);
    }
}
