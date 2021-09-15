<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDocuapli
 * 
 * @property int $numero_doap
 * @property int|null $docuadm_doap
 * @property int|null $docuapli_doap
 * @property float|null $importe_doap
 * @property int|null $tipo_doap
 * @property string|null $comentario_doap
 * @property character|null $numerea_doap
 *
 * @package App\Models
 */
class VinDocuapli extends Model
{
	protected $table = 'vin_docuapli';
	protected $primaryKey = 'numero_doap';
	public $timestamps = false;

	protected $casts = [
		'docuadm_doap' => 'int',
		'docuapli_doap' => 'int',
		'importe_doap' => 'float',
		'tipo_doap' => 'int',
		'numerea_doap' => 'character'
	];

	protected $fillable = [
		'docuadm_doap',
		'docuapli_doap',
		'importe_doap',
		'tipo_doap',
		'comentario_doap',
		'numerea_doap'
	];
}
