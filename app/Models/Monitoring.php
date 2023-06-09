<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;
    protected $table = 'monitorings';
    protected $primaryKey = 'id';

    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    public function farmer()
    {
        return $this->belongsTo(User::class);
    }
}
