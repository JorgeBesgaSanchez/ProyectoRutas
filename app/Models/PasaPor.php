<?php

namespace App\Models;
//las tablas 'pivot' o intermedias extienden de la clase 'pivot'
use Illuminate\Database\Eloquent\Relations\Pivot;
/**
 * @var bool $incrementing indica si los IDs son autoincrementales
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class PasaPor extends Pivot
{
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool $incrementing
    */
    public $incrementing = true;

    protected $table = 'pasan';
    protected $fillable = ['id', 'id_ruta', 'id_toponimo'];

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getNombreRuta($id) {
        $ruta = Ruta::getRutadById($id);
        $nombre = $ruta->nombre;
        return $nombre;
    }

    public static function getNombreToponimo($id) {
        $toponimo = Toponimo::getToponimoById($id);
        $nombre = $toponimo->nombre;
        return $nombre;
    }
    
}
