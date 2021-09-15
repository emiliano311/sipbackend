<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinVencimiento
 * 
 * @property int $numero_venc
 * @property int|null $documento_venc
 * @property Carbon|null $fecha_venc
 * @property float|null $importe_venc
 * @property float|null $aplicado_venc
 *
 * @package App\Models
 */
class VinVencimiento extends Model
{
	protected $table = 'vin_vencimientos';
	protected $primaryKey = 'numero_venc';
	public $timestamps = false;

	protected $casts = [
		'documento_venc' => 'int',
		'importe_venc' => 'float',
		'aplicado_venc' => 'float'
	];

	protected $dates = [
		'fecha_venc'
	];

	protected $fillable = [
		'documento_venc',
		'fecha_venc',
		'importe_venc',
		'aplicado_venc'
	];
}
