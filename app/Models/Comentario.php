<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $correo
 * @property $telefono
 * @property $comentario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comentario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
		'comentario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','correo','telefono','comentario'];



}
