<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BolEspecy
 * 
 * @property int $numero_espe
 * @property character varying|null $nombre_espe
 * @property float|null $tipo_espe
 * @property int|null $vinculadacon_espe
 * @property bool|null $activa_espe
 *
 * @package App\Models
 */
class BolEspecy extends Model
{
	protected $table = 'bol_especies';
	protected $primaryKey = 'numero_espe';
	public $timestamps = false;

	protected $casts = [
		'nombre_espe' => 'character varying',
		'tipo_espe' => 'float',
		'vinculadacon_espe' => 'int',
		'activa_espe' => 'bool'
	];

	protected $fillable = [
		'nombre_espe',
		'tipo_espe',
		'vinculadacon_espe',
		'activa_espe'
	];
}
