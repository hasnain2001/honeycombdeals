<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'destination_url',
        'ending_date',
        'status',
        'authentication',
        'store',
        'clicks',
        'order',
    ];

 public function store()
    {
        return $this->belongsTo(Stores::class, 'store_id');
    }

}
