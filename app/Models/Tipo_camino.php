<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @var string $table  nombre de la tabla de la base de datos a la que representa el modelo
 * @var array $fillable columnas de la tabla que se asignarán al modelo y se permitirá que se guarden datos en la tabla
 */
class Tipo_camino extends Model
{
    protected $table = 'tipo_caminos';
    protected $fillable = ['id', 'nombre'];

    /**
     * relacion N:M entre Tipo_camino y Ruta
     *
     * @return void instancia del modelo Ruta
     */
    public function rutas()
    {
        return $this->belongsToMany('App\Models\Ruta', 'recorren', 'id_ruta', 'id_camino')
        ->withPivot(['id_ruta', 'id_camino']);
        //el segundo argumento 'recorren' es el nombre de la tabla 'pivot' o intermedia
        //el tercer argumento indica las columnas que se usarán en la consulta
    }

    /* ----- METODOS ESTATICOS AUXILIARES ----- */
    /**
     * Undocumented function
     *
     * @param [entero] $id id de la provincia que queremos obtener
     * @return void Objeto provincia (fila) con el id pasado por parámetro
     */
    public static function getCaminoById($id) {
        $item = Tipo_camino::where('id', $id)->first();
        return $item;
    }
}
