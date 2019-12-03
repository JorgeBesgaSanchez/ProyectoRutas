<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Clase Comunidad
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Comunidad extends Model
{
    protected $table = 'comunidades';
    protected $fillable = ['id', 'nombre'];

    /**
     * Relacion 1:N entre Comunidad y Provincia
     *
     * @return void instancia del modelo Provincia
     */
    public function provincias()
    {
        return $this->hasMany('App\Models\Provincia', 'id_comunidad');
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getComunidadById($id) {
        $item = Comunidad::where('id', $id)->first();
        return $item;
    }

    
}
