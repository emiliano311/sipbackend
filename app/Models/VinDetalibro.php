<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDetalibro
 * 
 * @property int $numero_deli
 * @property int|null $librodiario_deli
 *
 * @package App\Models
 */
class VinDetalibro extends Model
{
	protected $table = 'vin_detalibro';
	protected $primaryKey = 'numero_deli';
	public $timestamps = false;

	protected $casts = [
		'librodiario_deli' => 'int'
	];

	protected $fillable = [
		'librodiario_deli'
	];
}
