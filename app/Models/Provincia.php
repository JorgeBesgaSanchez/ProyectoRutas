<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = ['id', 'id_provincia', 'nombre', 'id_comunidad'];

    /**
     * Relacion 1:N entre Provincia y Toponimo
     *
     * @return void instancia del modelo Toponimo
     */
    public function toponimos()
    {
        return $this->hasMany('App\Models\Toponimo', 'id_provincia');
    }

    /**
     * relacion inversa N:1 entre Provincia y Comunidad
     *
     * @return void instancia del modelo Comunidad
     */
    public function comunidades()
    {
        return $this->belongsTo('App\Models\Comunidad', 'id_comunidad');
    }

    /**
     * relacion N:M entre Provincia y Zona
     *
     * @return void instancia del modelo Zona
     */
    public function zonas()
    {
        return $this->belongsToMany('App\Models\Zona', 'situadas', 'id_provincia', 'id_zona')
        ->withPivot(['id_provincia', 'id_zona']); 
        //el segundo argumento 'pasan' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta;;
    }

    /* ----- METODOS ESTATICOS AUXILIARES ----- */
    /**
     * Undocumented function
     *
     * @param [entero] $id id de la provincia que queremos obtener
     * @return void Objeto provincia (fila) con el id pasado por parámetro
     */
    public static function getProvinciaById($id) {
        $item = Provincia::where('id', $id)->first();
        return $item;
    }

    public static function getNombreComunidad($id) {
        $comunidad = Comunidad::getComunidadById($id);
        $nombre = $comunidad->nombre;
        return $nombre;
    }


}
