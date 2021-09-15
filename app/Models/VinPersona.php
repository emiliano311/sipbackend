<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinPersona
 * 
 * @property int $numero_pers
 * @property character varying|null $nombre_pers
 * @property character varying|null $direccion_pers
 * @property character varying|null $telefono_pers
 * @property character varying|null $email_pers
 * @property character varying|null $cuit_pers
 * @property bool|null $esclie_pers
 * @property bool|null $esprove_pers
 * @property Carbon|null $fechanac_pers
 * @property string|null $observaciones_pers
 * @property bool|null $activo_pers
 * @property character|null $codigo_pers
 * @property int|null $lista_pers
 *
 * @package App\Models
 */
class VinPersona extends Model
{
	protected $table = 'vin_personas';
	protected $primaryKey = 'numero_pers';
	public $timestamps = false;

	protected $casts = [
		'nombre_pers' => 'character varying',
		'direccion_pers' => 'character varying',
		'telefono_pers' => 'character varying',
		'email_pers' => 'character varying',
		'cuit_pers' => 'character varying',
		'esclie_pers' => 'bool',
		'esprove_pers' => 'bool',
		'activo_pers' => 'bool',
		'codigo_pers' => 'character',
		'lista_pers' => 'int'
	];

	protected $dates = [
		'fechanac_pers'
	];

	protected $fillable = [
		'nombre_pers',
		'direccion_pers',
		'telefono_pers',
		'email_pers',
		'cuit_pers',
		'esclie_pers',
		'esprove_pers',
		'fechanac_pers',
		'observaciones_pers',
		'activo_pers',
		'codigo_pers',
		'lista_pers'
	];
}
