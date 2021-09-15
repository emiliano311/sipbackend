<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MsgRespmen
 * 
 * @property int $numero_reme
 * @property Carbon|null $fecha_reme
 * @property time without time zone|null $hora_reme
 * @property int|null $estado_reme
 * @property string|null $texto_reme
 * @property int|null $origen_reme
 * @property int|null $mensaje_reme
 *
 * @package App\Models
 */
class MsgRespmen extends Model
{
	protected $table = 'msg_respmens';
	protected $primaryKey = 'numero_reme';
	public $timestamps = false;

	protected $casts = [
		'hora_reme' => 'time without time zone',
		'estado_reme' => 'int',
		'origen_reme' => 'int',
		'mensaje_reme' => 'int'
	];

	protected $dates = [
		'fecha_reme'
	];

	protected $fillable = [
		'fecha_reme',
		'hora_reme',
		'estado_reme',
		'texto_reme',
		'origen_reme',
		'mensaje_reme'
	];
}
