<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDocuarti
 * 
 * @property int $numero_dart
 * @property int|null $docuadm_dart
 * @property int|null $producto_dart
 * @property float|null $cantidad_dart
 * @property int|null $ubicorig_dart
 * @property int|null $ubicdest_dart
 * @property float|null $precio_dart
 * @property int|null $linea_dart
 * @property string|null $descripcion_dart
 * @property float|null $comision_dart
 * @property bool|null $cancelado_dart
 *
 * @package App\Models
 */
class VinDocuarti extends Model
{
	protected $table = 'vin_docuarti';
	protected $primaryKey = 'numero_dart';
	public $timestamps = false;

	protected $casts = [
		'docuadm_dart' => 'int',
		'producto_dart' => 'int',
		'cantidad_dart' => 'float',
		'ubicorig_dart' => 'int',
		'ubicdest_dart' => 'int',
		'precio_dart' => 'float',
		'linea_dart' => 'int',
		'comision_dart' => 'float',
		'cancelado_dart' => 'bool'
	];

	protected $fillable = [
		'docuadm_dart',
		'producto_dart',
		'cantidad_dart',
		'ubicorig_dart',
		'ubicdest_dart',
		'precio_dart',
		'linea_dart',
		'descripcion_dart',
		'comision_dart',
		'cancelado_dart'
	];
}
