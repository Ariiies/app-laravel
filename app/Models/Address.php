<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;

    protected $fillable = ['address', 'city', 'state', 'country', 'profile_id']; // permite la adicion masiva de los campos que se encuentran en el array

    public function profile()
    {
        return $this->belongsTo(Profile::class); // relacion uno a muchos inversa
    }
}
