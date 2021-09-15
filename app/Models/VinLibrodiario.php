<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinLibrodiario
 * 
 * @property int $numero_lidi
 * @property int|null $numedoc_lidi
 * @property float|null $saldoini_lidi
 * @property float|null $totalefvo_lidi
 * @property float|null $totaltarj_lidi
 * @property Carbon|null $fecha_lidi
 * @property character varying|null $comprobante_lidi
 *
 * @package App\Models
 */
class VinLibrodiario extends Model
{
	protected $table = 'vin_librodiario';
	protected $primaryKey = 'numero_lidi';
	public $timestamps = false;

	protected $casts = [
		'numedoc_lidi' => 'int',
		'saldoini_lidi' => 'float',
		'totalefvo_lidi' => 'float',
		'totaltarj_lidi' => 'float',
		'comprobante_lidi' => 'character varying'
	];

	protected $dates = [
		'fecha_lidi'
	];

	protected $fillable = [
		'numedoc_lidi',
		'saldoini_lidi',
		'totalefvo_lidi',
		'totaltarj_lidi',
		'fecha_lidi',
		'comprobante_lidi'
	];
}
