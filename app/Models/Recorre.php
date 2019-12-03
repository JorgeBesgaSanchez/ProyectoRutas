<?php

namespace App\Models;

//las tablas 'pivot' o intermedias extienden de la clase 'pivot'
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Recorre extends Pivot
{
    protected $table = 'recorren';
    protected $fillable = ['id', 'id_ruta', 'id_camino'];

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getNombreRuta($id) {
        $ruta = Ruta::getRutadById($id);
        $nombre = $ruta->nombre;
        return $nombre;
    }

    public static function getNombreCamino($id) {
        $camino = Tipo_camino::getCaminoById($id);
        $nombre = $camino->nombre;
        return $nombre;
    }
}
