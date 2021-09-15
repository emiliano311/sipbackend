<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogMensaje
 * 
 * @property Carbon|null $fecha_lome
 * @property time without time zone|null $hora_lome
 * @property character varying|null $comentario_lome
 * @property character varying|null $usuario_lome
 * @property int $numero_lome
 *
 * @package App\Models
 */
class LogMensaje extends Model
{
	protected $table = 'log_mensajes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'hora_lome' => 'time without time zone',
		'comentario_lome' => 'character varying',
		'usuario_lome' => 'character varying',
		'numero_lome' => 'int'
	];

	protected $dates = [
		'fecha_lome'
	];

	protected $fillable = [
		'fecha_lome',
		'hora_lome',
		'comentario_lome',
		'usuario_lome',
		'numero_lome'
	];
}
