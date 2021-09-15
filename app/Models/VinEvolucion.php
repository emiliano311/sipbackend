<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinEvolucion
 * 
 * @property int $numero_evol
 * @property Carbon|null $fecha_evol
 * @property float|null $existencia_evol
 * @property float|null $saldos_evol
 * @property float|null $caja_evol
 * @property int|null $empresa_evol
 *
 * @package App\Models
 */
class VinEvolucion extends Model
{
	protected $table = 'vin_evolucion';
	protected $primaryKey = 'numero_evol';
	public $timestamps = false;

	protected $casts = [
		'existencia_evol' => 'float',
		'saldos_evol' => 'float',
		'caja_evol' => 'float',
		'empresa_evol' => 'int'
	];

	protected $dates = [
		'fecha_evol'
	];

	protected $fillable = [
		'fecha_evol',
		'existencia_evol',
		'saldos_evol',
		'caja_evol',
		'empresa_evol'
	];
}
