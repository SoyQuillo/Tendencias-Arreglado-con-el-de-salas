<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";

    protected $fillable = ['name', 'email', 'address', 'phone'];
    protected $guarded = ['id','created_at', 'updated_at'];

    public function orders()
 {
 return $this->hasMany(Order::class);
 }
}
