<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BolCotizacion
 * 
 * @property character varying|null $nombresubya_coti
 * @property Carbon|null $fecha_coti
 * @property time without time zone|null $hora_coti
 * @property float|null $ultimo_coti
 * @property float|null $operaciones_coti
 * @property float|null $cierreanterior_coti
 * @property float|null $apertura_coti
 * @property float|null $maximo_coti
 * @property float|null $minimo_coti
 * @property float|null $volumen_coti
 * @property float|null $montonegociado_coti
 * @property int $numero_coti
 * @property float|null $cantidadmoc_coti
 * @property float|null $preciomoc_coti
 * @property float|null $cantidadmov_coti
 * @property float|null $preciomov_coti
 * @property time without time zone|null $horareal_coti
 *
 * @package App\Models
 */
class BolCotizacion extends Model
{
	protected $table = 'bol_cotizacion';
	protected $primaryKey = 'numero_coti';
	public $timestamps = false;

	protected $casts = [
		'nombresubya_coti' => 'character varying',
		'hora_coti' => 'time without time zone',
		'ultimo_coti' => 'float',
		'operaciones_coti' => 'float',
		'cierreanterior_coti' => 'float',
		'apertura_coti' => 'float',
		'maximo_coti' => 'float',
		'minimo_coti' => 'float',
		'volumen_coti' => 'float',
		'montonegociado_coti' => 'float',
		'cantidadmoc_coti' => 'float',
		'preciomoc_coti' => 'float',
		'cantidadmov_coti' => 'float',
		'preciomov_coti' => 'float',
		'horareal_coti' => 'time without time zone'
	];

	protected $dates = [
		'fecha_coti'
	];

	protected $fillable = [
		'nombresubya_coti',
		'fecha_coti',
		'hora_coti',
		'ultimo_coti',
		'operaciones_coti',
		'cierreanterior_coti',
		'apertura_coti',
		'maximo_coti',
		'minimo_coti',
		'volumen_coti',
		'montonegociado_coti',
		'cantidadmoc_coti',
		'preciomoc_coti',
		'cantidadmov_coti',
		'preciomov_coti',
		'horareal_coti'
	];
}
