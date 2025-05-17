<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 
    'created_at', 
    'updated_at']; // permite la adicion masiva de todos los campos menos los que se encuentran en el array

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
    }
    public function address(){
        return $this->hasOne(Address::class, 'profile_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
    }
}
