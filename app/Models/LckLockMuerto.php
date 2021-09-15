<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LckLockMuerto
 * 
 * @property timestamp without time zone|null $pasada_lomu
 * @property int|null $numero_lomu
 * @property character varying|null $tabla_lomu
 * @property character varying|null $usuario_lomu
 * @property int|null $id_lomu
 * @property timestamp without time zone|null $fechahora_lomu
 * @property int|null $pid_lomu
 *
 * @package App\Models
 */
class LckLockMuerto extends Model
{
	protected $table = 'lck_lock_muertos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pasada_lomu' => 'timestamp without time zone',
		'numero_lomu' => 'int',
		'tabla_lomu' => 'character varying',
		'usuario_lomu' => 'character varying',
		'id_lomu' => 'int',
		'fechahora_lomu' => 'timestamp without time zone',
		'pid_lomu' => 'int'
	];

	protected $fillable = [
		'pasada_lomu',
		'numero_lomu',
		'tabla_lomu',
		'usuario_lomu',
		'id_lomu',
		'fechahora_lomu',
		'pid_lomu'
	];
}
