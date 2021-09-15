<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccFeriado
 * 
 * @property int $numero_feri
 * @property int|null $tipo_feri
 * @property int|null $dia_feri
 * @property int|null $mes_feri
 * @property int|null $anio_feri
 * @property character varying|null $descripcion_feri
 * @property int|null $duracion_feri
 * @property float|null $hini_feri
 *
 * @package App\Models
 */
class AccFeriado extends Model
{
	protected $table = 'acc_feriados';
	protected $primaryKey = 'numero_feri';
	public $timestamps = false;

	protected $casts = [
		'tipo_feri' => 'int',
		'dia_feri' => 'int',
		'mes_feri' => 'int',
		'anio_feri' => 'int',
		'descripcion_feri' => 'character varying',
		'duracion_feri' => 'int',
		'hini_feri' => 'float'
	];

	protected $fillable = [
		'tipo_feri',
		'dia_feri',
		'mes_feri',
		'anio_feri',
		'descripcion_feri',
		'duracion_feri',
		'hini_feri'
	];
}
