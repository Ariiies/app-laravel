<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id', 'category_id']; // permite la adicion masiva de los campos que se encuentran en el array


    // RELACIONES
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
    }
}
