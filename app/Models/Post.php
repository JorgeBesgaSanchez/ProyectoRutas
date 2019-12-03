<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['id', 'texto', 'id_usuario', 'id_ruta'];

    /**
     * Relacion inversa N:1 entre Post y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->belongsTo('App\Models\Ruta', 'id_ruta');
    }

    /**
     * Relacion inversa N:1 entre Post y Usuario
     *
     * @return void instancia del modelo Usuario
     */
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getNombreUsuario($id) {
        $usuario = Usuario::getUsuariodById($id);
        $nombre = $usuario->nombre;
        return $nombre;
    }

    public static function getNombreRuta($id) {
        $ruta = Ruta::getRutadById($id);
        $nombre = $ruta->nombre;
        return $nombre;
    }

}
