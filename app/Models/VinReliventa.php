<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinReliventa
 * 
 * @property int $numero_reve
 * @property timestamp without time zone|null $fecha_reve
 * @property int $producto_reve
 * @property float|null $cantidad_reve
 * @property float|null $precio_reve
 * @property string|null $comentario_reve
 * @property int|null $factura_reve
 *
 * @package App\Models
 */
class VinReliventa extends Model
{
	protected $table = 'vin_reliventas';
	protected $primaryKey = 'numero_reve';
	public $timestamps = false;

	protected $casts = [
		'fecha_reve' => 'timestamp without time zone',
		'producto_reve' => 'int',
		'cantidad_reve' => 'float',
		'precio_reve' => 'float',
		'factura_reve' => 'int'
	];

	protected $fillable = [
		'fecha_reve',
		'producto_reve',
		'cantidad_reve',
		'precio_reve',
		'comentario_reve',
		'factura_reve'
	];
}
