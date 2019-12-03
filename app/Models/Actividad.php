<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Clase Actividad
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable = ['id', 'nombre'];

    /**
     * Relacion 1:N entre Actividad y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'id_actividad', 'id');
    }

    /**
     * Relacion inversa M:N entre Actividad y Usuario
     *
     * @return void instancia del modelo Usuario
     */
    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario', 'inscriben', 'id_actividad', 'id_usuario')
        ->withPivot(['id_actividad', 'id_usuario']); 
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta;
    }

    /* ---------- METODOS AUXILIARES ---------- */

    /**
     * obtiene una fila completa de la tabla actividades (objeto) por su id
     *
     * @param [entero] $id
     * @return void La fila id de actividad
     */
    public static function getActividadById($id) {
        $item = Actividad::where('id', $id)->first();
        return $item;
    }
}
