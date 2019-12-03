<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Ruta extends Model
{
    protected $table = 'rutas';
    protected $fillable = ['id', 'nombre', 'desnivel', 'sugerencias', 'cartografia', 'id_camino', 'id_dificultad', 'id_zona', 'id_actividad', 'fecha'];



    /**
     * relacion inversa M:N entre Ruta y Tipo_camino
     *
     * @return void instancia del modelo Tipo_camino
     */
    public function tipo_caminos()
    {
        return $this->belongsToMany('App\Models\Tipo_camino', 'recorren', 'id_ruta', 'id_camino')
        ->withPivot(['id_ruta', 'id_camino']);
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta
    }

    /**
     * relacion inversa N:1 entre Ruta y Dificultad
     *
     * @return void instancia del modelo Dificultad
     */
    public function dificultades()
    {
        return $this->belongsTo('App\Models\Dificultad', 'id_dificultad');
    }

    /**
     * relacion inversa M:N entre Ruta y Toponimo
     *
     * @return void instancia del modelo Toponimo
     */
    public function toponimos()
    {
        return $this->belongsToMany('App\Models\Toponimo', 'pasan', 'id_ruta', 'id_toponimo')
            ->withPivot(['id_ruta', 'id_toponimo']); 
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta
    }

    /**
     * relacion inversa N:1 entre Ruta y Zona
     *
     * @return void instancia del modelo Zona
     */
    public function zonas()
    {
        return $this->belongsTo('App\Models\Zona', 'id_zona');
    }

    /**
     * relacion 1:N entre Ruta y Post
     *
     * @return void instancia del modelo Post
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'id_ruta');
    }

    /**
     * relacion inversa N:1 entre Ruta y Actividad
     *
     * @return void instancia del modelo Actividad
     */
    public function actividades()
    {
        return $this->belongsTo('App\Models\Actividad', 'id_actividad');
    }

    /**
     * relacion inversa M:N entre Ruta y Tpo_marcha
     *
     * @return void instancia del modelo Tipo_marcha
     */
    public function tipo_marchas()
    {
        return $this->belongsToMany('App\Models\Tipo_marcha');
    }

    /* ---------- METODOS AUXILIARES ---------- */

    public static function getRutadById($id) {
        $item = Ruta::where('id', $id)->first();
        return $item;
    }

    public static function getNombreCamino($id) {
        $camino = Tipo_camino::getCaminoById($id);
        $nombre = $camino->nombre;
        return $nombre;
    }

    public static function getNombreDificultad($id) {
        $dificultad = Dificultad::getDificultadById($id);
        $nombre = $dificultad->nombre;
        return $nombre;
    }
    public static function getNombreZona($id) {
        $zona = Zona::getZonadById($id);
        $nombre = $zona->nombre;
        return $nombre;
    }

    public static function getNombreActividad($id) {
        $actividad = Actividad::getActividadById($id);
        $nombre = $actividad->nombre;
        return $nombre;
    }

}
