<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable=[
        'price','quantity','color',
    ];
    use HasFactory;
}
