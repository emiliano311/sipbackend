<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LckLock
 * 
 * @property int $numero_lock
 * @property character varying|null $tabla_lock
 * @property character varying|null $usuario_lock
 * @property int|null $id_lock
 * @property timestamp without time zone|null $fechahora_lock
 * @property int|null $pid_lock
 *
 * @package App\Models
 */
class LckLock extends Model
{
	protected $table = 'lck_locks';
	protected $primaryKey = 'numero_lock';
	public $timestamps = false;

	protected $casts = [
		'tabla_lock' => 'character varying',
		'usuario_lock' => 'character varying',
		'id_lock' => 'int',
		'fechahora_lock' => 'timestamp without time zone',
		'pid_lock' => 'int'
	];

	protected $fillable = [
		'tabla_lock',
		'usuario_lock',
		'id_lock',
		'fechahora_lock',
		'pid_lock'
	];
}
