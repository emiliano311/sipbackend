<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BolCotihist
 * 
 * @property int $numero_cohi
 * @property Carbon|null $fecha_cohi
 * @property int|null $especie_cohi
 * @property float|null $cierre_cohi
 * @property float|null $apertura_cohi
 * @property float|null $maximo_cohi
 * @property float|null $minimo_cohi
 * @property int|null $volumen_cohi
 * @property int|null $monto_cohi
 * @property int|null $operaciones_cohi
 *
 * @package App\Models
 */
class BolCotihist extends Model
{
	protected $table = 'bol_cotihist';
	protected $primaryKey = 'numero_cohi';
	public $timestamps = false;

	protected $casts = [
		'especie_cohi' => 'int',
		'cierre_cohi' => 'float',
		'apertura_cohi' => 'float',
		'maximo_cohi' => 'float',
		'minimo_cohi' => 'float',
		'volumen_cohi' => 'int',
		'monto_cohi' => 'int',
		'operaciones_cohi' => 'int'
	];

	protected $dates = [
		'fecha_cohi'
	];

	protected $fillable = [
		'fecha_cohi',
		'especie_cohi',
		'cierre_cohi',
		'apertura_cohi',
		'maximo_cohi',
		'minimo_cohi',
		'volumen_cohi',
		'monto_cohi',
		'operaciones_cohi'
	];
}
