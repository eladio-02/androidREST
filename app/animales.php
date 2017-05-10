<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class animales extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'animales';
    protected $fillable = [
        'registro','codigo', 'nombre', 'raza', 'fecha_nacimiento','sexo','origen_reproductivo','fecha_destete','foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'created_at','updated_at'/// 'password', 'remember_token',
    ];
}
