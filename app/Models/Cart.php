<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=["price","total","num_of_products","user_id"];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
    
}
