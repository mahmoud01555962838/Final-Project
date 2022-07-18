<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=["street","building","floor","flat","notes","city","area"]; 

=======
    protected $fillable=["street","building","floor","flat","notes","city","area"];

    public function user()
    {
        return $this->belongsToMany(User::class); 
    }
>>>>>>> 91cb5a8219efa7a1c44acb8a51159a4964a41869
}
