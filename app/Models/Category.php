<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    // diferentes formas de permitir la adicion masiva
    protected $fillable = ['name']; // permite la adicion masiva de los campos que se encuentran en el array
    //protected $guarded = ['id', 'created_at', 'updated_at']; // permite la adicion masiva de todos los campos menos los que se encuentran en el array

    public function posts(){
    return $this->hasMany(Post::class, 'category_id', 'id');
}
}
