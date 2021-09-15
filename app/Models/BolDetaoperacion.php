<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BolDetaoperacion
 * 
 * @property int $numero_deop
 * @property int|null $numeroope_deop
 * @property int|null $cantidad_deop
 *
 * @package App\Models
 */
class BolDetaoperacion extends Model
{
	protected $table = 'bol_detaoperacion';
	protected $primaryKey = 'numero_deop';
	public $timestamps = false;

	protected $casts = [
		'numeroope_deop' => 'int',
		'cantidad_deop' => 'int'
	];

	protected $fillable = [
		'numeroope_deop',
		'cantidad_deop'
	];
}
