<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status', 'time_delivery','notes','photo','user_id'
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderdetail()
    {
            return $this->hasOne(Orderdetail::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
