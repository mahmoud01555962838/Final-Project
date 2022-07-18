<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=["street","building","floor","flat","notes","city","area"];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
