<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccPrograma
 * 
 * @property int $numero_prog
 * @property int $tipo_prog
 * @property character varying $titulo_prog
 * @property string|null $descripcion_prog
 * @property character varying|null $modulo_prog
 * @property character varying|null $clase_prog
 * @property character varying|null $parametro_prog
 * @property int|null $imagen_prog
 * @property int|null $cantref_prog
 *
 * @package App\Models
 */
class AccPrograma extends Model
{
	protected $table = 'acc_programas';
	protected $primaryKey = 'numero_prog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero_prog' => 'int',
		'tipo_prog' => 'int',
		'titulo_prog' => 'character varying',
		'modulo_prog' => 'character varying',
		'clase_prog' => 'character varying',
		'parametro_prog' => 'character varying',
		'imagen_prog' => 'int',
		'cantref_prog' => 'int'
	];

	protected $fillable = [
		'tipo_prog',
		'titulo_prog',
		'descripcion_prog',
		'modulo_prog',
		'clase_prog',
		'parametro_prog',
		'imagen_prog',
		'cantref_prog'
	];
}
