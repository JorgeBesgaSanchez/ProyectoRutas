<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'nombre', 'email', 'contraseña'];

    /**
     * relacion 1:N entre Usuario y Post
     *
     * @return void instancia del modelo Post
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'id_usuario');
    }

    /**
     * relacion N:M entre Usuario y Actividad
     *
     * @return void instancia del modelo Actividad
     */
    public function actividades()
    {
        return $this->belongsToMany('App\Models\Actividad', 'inscriben', 'id_actividad', 'id_usuario')
        ->withPivot(['id_actividad', 'id_usuario']); 
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta;;
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getUsuariodById($id) {
        $item = Usuario::where('id', $id)->first();
        return $item;
    }
}
