<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SisTarea
 * 
 * @property int $numero_tare
 * @property character varying|null $nombre_tare
 * @property string|null $detalle_tare
 * @property int|null $estado_tare
 * @property timestamp with time zone|null $fechahora_tare
 * @property int|null $empresa_tare
 * @property int|null $plazo_tare
 * @property string|null $repuesta_tare
 *
 * @package App\Models
 */
class SisTarea extends Model
{
	protected $table = 'sis_tarea';
	protected $primaryKey = 'numero_tare';
	public $timestamps = false;

	protected $casts = [
		'nombre_tare' => 'character varying',
		'estado_tare' => 'int',
		'fechahora_tare' => 'timestamp with time zone',
		'empresa_tare' => 'int',
		'plazo_tare' => 'int'
	];

	protected $fillable = [
		'nombre_tare',
		'detalle_tare',
		'estado_tare',
		'fechahora_tare',
		'empresa_tare',
		'plazo_tare',
		'repuesta_tare'
	];
}
