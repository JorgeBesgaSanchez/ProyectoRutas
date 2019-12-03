<?php

namespace App\Models;
//las tablas 'pivot' o intermedias extienden de la clase 'pivot'
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @var bool $incrementing indica si los IDs son autoincrementales
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Situada extends Pivot
{
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = true;
    
    protected $table = 'situadas';
    protected $fillable = ['id_provincia', 'id_zona'];

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getNombreProvincia($id) {
        $provincia = Provincia::getProvinciaById($id);
        $nombre = $provincia->nombre;
        return $nombre;
    }

    public static function getNombreZona($id) {
        $zona = Zona::getZonadById($id);
        $nombre = $zona->nombre;
        return $nombre;
    }
}

