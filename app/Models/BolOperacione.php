<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BolOperacione
 * 
 * @property int $numero_oper
 * @property float|null $precio_oper
 * @property float|null $porcobjetivo_oper
 * @property Carbon|null $fecha_oper
 * @property float|null $cantidad_oper
 * @property float|null $porccomi_oper
 * @property float|null $numeroespe_oper
 * @property int|null $tipo_oper
 *
 * @package App\Models
 */
class BolOperacione extends Model
{
	protected $table = 'bol_operaciones';
	protected $primaryKey = 'numero_oper';
	public $timestamps = false;

	protected $casts = [
		'precio_oper' => 'float',
		'porcobjetivo_oper' => 'float',
		'cantidad_oper' => 'float',
		'porccomi_oper' => 'float',
		'numeroespe_oper' => 'float',
		'tipo_oper' => 'int'
	];

	protected $dates = [
		'fecha_oper'
	];

	protected $fillable = [
		'precio_oper',
		'porcobjetivo_oper',
		'fecha_oper',
		'cantidad_oper',
		'porccomi_oper',
		'numeroespe_oper',
		'tipo_oper'
	];
}
