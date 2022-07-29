<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable=["qty","product_id","user_id",];
=======
    protected $fillable=["qty","product_id","size","user_id"];
    protected $attributes = ['qty'=>1];
>>>>>>> ac13dccbc8ac98e096a75bd6a6b8dc1de3f817a0

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function total()
    {
        return $this->qty * $this->product->price;
    }
}
