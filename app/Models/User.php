<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'name',
        'email',
        'password',
        'address',
        'no_hp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function material()
    {
        return $this->hasMany(Material::class);
    }
    
    public function seller_transaction()
    {
        return $this->hasMany(SellerTransaction::class);
    }
    
    public function farmer_transaction()
    {
        return $this->hasMany(FarmerTransaction::class);
    }
    
    public function monitoring_seller()
    {
        return $this->hasMany(User::class);
    }
    
    public function monitoring_farmer()
    {
        return $this->hasMany(User::class);
    }
}
