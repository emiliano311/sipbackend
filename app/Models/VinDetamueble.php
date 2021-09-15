<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDetamueble
 * 
 * @property int $numero_demu
 * @property character varying|null $partes_demu
 * @property float|null $largo_demu
 * @property float|null $fondo_demu
 * @property int|null $madera_demu
 * @property int|null $mueble_demu
 * @property int|null $cantidad_demu
 *
 * @package App\Models
 */
class VinDetamueble extends Model
{
	protected $table = 'vin_detamueble';
	protected $primaryKey = 'numero_demu';
	public $timestamps = false;

	protected $casts = [
		'partes_demu' => 'character varying',
		'largo_demu' => 'float',
		'fondo_demu' => 'float',
		'madera_demu' => 'int',
		'mueble_demu' => 'int',
		'cantidad_demu' => 'int'
	];

	protected $fillable = [
		'partes_demu',
		'largo_demu',
		'fondo_demu',
		'madera_demu',
		'mueble_demu',
		'cantidad_demu'
	];
}
