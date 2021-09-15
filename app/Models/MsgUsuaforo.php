<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MsgUsuaforo
 * 
 * @property int $numero_usfo
 * @property int|null $foro_usfo
 * @property int|null $usuario_usfo
 * @property bool|null $moderador_usfo
 *
 * @package App\Models
 */
class MsgUsuaforo extends Model
{
	protected $table = 'msg_usuaforo';
	protected $primaryKey = 'numero_usfo';
	public $timestamps = false;

	protected $casts = [
		'foro_usfo' => 'int',
		'usuario_usfo' => 'int',
		'moderador_usfo' => 'bool'
	];

	protected $fillable = [
		'foro_usfo',
		'usuario_usfo',
		'moderador_usfo'
	];
}
