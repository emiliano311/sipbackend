<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinMueble
 * 
 * @property int $numero_mueb
 * @property character varying|null $tipo_mueb
 * @property int|null $alto_mueb
 * @property int|null $fondo_mueb
 * @property int|null $largo_mueb
 * @property string|null $descripcion_mueb
 *
 * @package App\Models
 */
class VinMueble extends Model
{
	protected $table = 'vin_muebles';
	protected $primaryKey = 'numero_mueb';
	public $timestamps = false;

	protected $casts = [
		'tipo_mueb' => 'character varying',
		'alto_mueb' => 'int',
		'fondo_mueb' => 'int',
		'largo_mueb' => 'int'
	];

	protected $fillable = [
		'tipo_mueb',
		'alto_mueb',
		'fondo_mueb',
		'largo_mueb',
		'descripcion_mueb'
	];
}
