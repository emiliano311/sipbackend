<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MsgMensaje
 * 
 * @property int $numero_mens
 * @property Carbon|null $fecha_mens
 * @property time without time zone|null $hora_mens
 * @property int|null $genero_mens
 * @property int|null $estado_mens
 * @property int|null $destino_mens
 * @property character varying|null $asunto_mens
 * @property string|null $texto_mens
 * @property int|null $origen_mens
 * @property int|null $vistopor_mens
 * @property int|null $usuadest_mens
 *
 * @package App\Models
 */
class MsgMensaje extends Model
{
	protected $table = 'msg_mensajes';
	protected $primaryKey = 'numero_mens';
	public $timestamps = false;

	protected $casts = [
		'hora_mens' => 'time without time zone',
		'genero_mens' => 'int',
		'estado_mens' => 'int',
		'destino_mens' => 'int',
		'asunto_mens' => 'character varying',
		'origen_mens' => 'int',
		'vistopor_mens' => 'int',
		'usuadest_mens' => 'int'
	];

	protected $dates = [
		'fecha_mens'
	];

	protected $fillable = [
		'fecha_mens',
		'hora_mens',
		'genero_mens',
		'estado_mens',
		'destino_mens',
		'asunto_mens',
		'texto_mens',
		'origen_mens',
		'vistopor_mens',
		'usuadest_mens'
	];
}
