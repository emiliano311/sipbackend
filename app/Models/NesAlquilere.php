<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NesAlquilere
 * 
 * @property int $numero_nesa
 * @property int $depto_nesa
 * @property int $estado_nesa
 * @property Carbon|null $fini_nesa
 * @property Carbon|null $ffin_nesa
 * @property float|null $importe_nesa
 * @property character varying|null $comentario_nesa
 * @property character varying|null $asunto_nesa
 *
 * @package App\Models
 */
class NesAlquilere extends Model
{
	protected $table = 'nes_alquileres';
	protected $primaryKey = 'numero_nesa';
	public $timestamps = false;

	protected $casts = [
		'depto_nesa' => 'int',
		'estado_nesa' => 'int',
		'importe_nesa' => 'float',
		'comentario_nesa' => 'character varying',
		'asunto_nesa' => 'character varying'
	];

	protected $dates = [
		'fini_nesa',
		'ffin_nesa'
	];

	protected $fillable = [
		'depto_nesa',
		'estado_nesa',
		'fini_nesa',
		'ffin_nesa',
		'importe_nesa',
		'comentario_nesa',
		'asunto_nesa'
	];
}
