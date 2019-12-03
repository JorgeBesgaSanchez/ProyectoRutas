<?php

namespace App\Models;
//las tablas 'pivot' o intermedias extienden de la clase 'pivot'
use Illuminate\Database\Eloquent\Relations\Pivot;
/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Inscribe extends Pivot
{
    protected $table = 'inscriben';
    protected $fillable = ['id', 'id_actividad', 'id_usuario', 'fecha_y_hora'];

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getNombreActividad($id) {
        $actividad = Actividad::getActividadById($id);
        $nombre = $actividad->nombre;
        return $nombre;
    }

    public static function getNombreUsuario($id) {
        $usuario = Usuario::getUsuariodById($id);
        $nombre = $usuario->nombre;
        return $nombre;
    }
}
