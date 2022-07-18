<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable=[
        'price','quantity','color','order_id','product_id'
    ];
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function products()
    {
            return $this->hasMany(Product::class);
    }
}
