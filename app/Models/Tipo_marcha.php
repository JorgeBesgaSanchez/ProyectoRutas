<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Tipo_marcha extends Model
{
    protected $table = 'tipo_marchas';
    protected $fillable = ['id', 'nombre'];

    /**
     * relacion N:M entre Tipo_marcha y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->belongsToMany('App\Models\Ruta');
    }
}
