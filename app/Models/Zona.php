<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Zona extends Model
{
    protected $fillable = ['id', 'nombre'];

    /**
     * relacion 1:N entre Zona y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'id_zona');
    }

    /**
     * relacion invesa M:N entre Zona y Provincia
     *
     * @return void instancia del modelo Provincia
     */
    public function provincias()
    {
        return $this->belongsToMany('App\Models\Provincia', 'situadas', 'id_provincia', 'id_zona')
        ->withPivot(['id_provincia', 'id_zona']); 
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta;
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getZonadById($id) {
        $item = Zona::where('id', $id)->first();
        return $item;
    }
}
