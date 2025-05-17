<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    //protected $table = 'users'; asi se puede configurar el acceso a la tabla 
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //RELACION UNO A UNO con la tabla profiles
    public function profile(){
        
       // return $this->hasOne(Profile::class, 'user_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
        return $this->hasOne(Profile::class);
    }

    //RELACION UNO A MUCHOS con la tabla posts
    public function posts(){
        return $this->hasMany(Post::class, 'user_id', 'id'); // si no has seguido als convcenciones de laravel se tiuene que especificar el nombre de la columna foranea y la columna local
    }
}
