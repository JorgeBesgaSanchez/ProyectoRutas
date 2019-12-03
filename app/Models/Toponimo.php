<?php

namespace App\Models;

use App\Models\Provincia;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Toponimo extends Model
{
    protected $table = 'toponimos';
    protected $fillable = ['id', 'nombre', 'id_provincia'];

    /**
     * relacion N:M entre Toponimo y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->belongsToMany('App\Models\Ruta', 'pasan', 'id_ruta', 'id_toponimo')
        ->withPivot(['id_ruta', 'id_toponimo']);
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta
    }

    /**
     * relacion inversa N:1 entre Toponimo y Provincia
     *
     * @return void
     */
    public function provincias()
    {
        return $this->belongsTo('App\Models\Provincia', 'id_provincia');
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getToponimoById($id) {
        $item = Toponimo::where('id', $id)->first();
        return $item;
    }

    public static function getNombreProvincia($id) {
        $provincia = Provincia::getProvinciaById($id);
        $nombre = $provincia->nombre;
        return $nombre;
    }
}
