<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccReserva
 * 
 * @property int $numero_rese
 * @property character varying|null $tabla_rese
 * @property character varying|null $usuario_rese
 * @property character varying|null $codigo_rese
 * @property int|null $numedoc_rese
 * @property int|null $pid_rese
 * @property timestamp without time zone|null $fechahora_rese
 *
 * @package App\Models
 */
class AccReserva extends Model
{
	protected $table = 'acc_reservas';
	protected $primaryKey = 'numero_rese';
	public $timestamps = false;

	protected $casts = [
		'tabla_rese' => 'character varying',
		'usuario_rese' => 'character varying',
		'codigo_rese' => 'character varying',
		'numedoc_rese' => 'int',
		'pid_rese' => 'int',
		'fechahora_rese' => 'timestamp without time zone'
	];

	protected $fillable = [
		'tabla_rese',
		'usuario_rese',
		'codigo_rese',
		'numedoc_rese',
		'pid_rese',
		'fechahora_rese'
	];
}
