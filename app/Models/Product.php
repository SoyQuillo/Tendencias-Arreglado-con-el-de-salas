<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'products';
    protected $fillable = [
        'fuel_type',
        'price_per_liter',
        'available_stock',
    ];

    protected $guarded = ['id','created_at','updated_at'];

   

    public function sale_details()
    {
        return $this->hasMany(Order::class);
    }
}