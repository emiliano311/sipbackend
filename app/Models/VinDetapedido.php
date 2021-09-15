<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDetapedido
 * 
 * @property int $numero_dtpd
 * @property int|null $pedido_dtpd
 * @property int|null $mueble_dtpd
 * @property int|null $cantidad_dtpd
 *
 * @package App\Models
 */
class VinDetapedido extends Model
{
	protected $table = 'vin_detapedido';
	protected $primaryKey = 'numero_dtpd';
	public $timestamps = false;

	protected $casts = [
		'pedido_dtpd' => 'int',
		'mueble_dtpd' => 'int',
		'cantidad_dtpd' => 'int'
	];

	protected $fillable = [
		'pedido_dtpd',
		'mueble_dtpd',
		'cantidad_dtpd'
	];
}
