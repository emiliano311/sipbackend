<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SisTarifa
 * 
 * @property int $numero_tari
 * @property Carbon|null $fechaini_tari
 * @property Carbon|null $fechafin_tari
 * @property int|null $nrousuario_tari
 * @property int|null $nrotarea_tari
 * @property character varying|null $comentario_tari
 * @property time without time zone|null $horaini_tari
 * @property time without time zone|null $horafin_tari
 *
 * @package App\Models
 */
class SisTarifa extends Model
{
	protected $table = 'sis_tarifa';
	protected $primaryKey = 'numero_tari';
	public $timestamps = false;

	protected $casts = [
		'nrousuario_tari' => 'int',
		'nrotarea_tari' => 'int',
		'comentario_tari' => 'character varying',
		'horaini_tari' => 'time without time zone',
		'horafin_tari' => 'time without time zone'
	];

	protected $dates = [
		'fechaini_tari',
		'fechafin_tari'
	];

	protected $fillable = [
		'fechaini_tari',
		'fechafin_tari',
		'nrousuario_tari',
		'nrotarea_tari',
		'comentario_tari',
		'horaini_tari',
		'horafin_tari'
	];
}
