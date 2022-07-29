<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=["photo","name",'price',"description",'category_id'];

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
    /* related product */

    public function scopeRelatedProducts($query, $count = 10, $inRandomOrder = true)
{
    $query = $query->where('category_id', $this->category_id)
                   ->where('name', '!=', $this->name);

    if ($inRandomOrder) {
        $query->inRandomOrder();
    }

    return $query->take($count);
}
}

