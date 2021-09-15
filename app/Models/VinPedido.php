<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinPedido
 * 
 * @property int $numero_pdid
 * @property Carbon|null $fecha_pdid
 * @property string|null $comentario_pdid
 *
 * @package App\Models
 */
class VinPedido extends Model
{
	protected $table = 'vin_pedidos';
	protected $primaryKey = 'numero_pdid';
	public $timestamps = false;

	protected $dates = [
		'fecha_pdid'
	];

	protected $fillable = [
		'fecha_pdid',
		'comentario_pdid'
	];
}
