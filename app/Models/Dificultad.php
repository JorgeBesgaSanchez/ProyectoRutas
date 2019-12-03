<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Clase Dificultad
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Dificultad extends Model
{
    protected $table = 'dificultades';
    protected $fillable = ['id', 'nombre'];

    /**
     * Relacion 1:N entre Dificultad y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'id_dificultad');
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getDificultadById($id) {
        $item = Dificultad::where('id', $id)->first();
        return $item;
    }
}
