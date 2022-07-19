<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["title","name",'price',"description",'category_id'];  
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderdetail(){
        return $this->belongsTo(orderdetail::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);


    }
    public function carts()
    {
        return $this->hasMany(Cart::class);

    }
}
