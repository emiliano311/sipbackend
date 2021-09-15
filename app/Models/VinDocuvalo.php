<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDocuvalo
 * 
 * @property int $numero_dova
 * @property int|null $docuadm_dova
 * @property int|null $tipo_dova
 * @property int|null $documento_dova
 * @property float|null $importe_dova
 * @property character|null $numerea_dova
 * @property string|null $comentario_dova
 * @property int|null $docuvalo_dova
 * @property float|null $comision_dova
 *
 * @package App\Models
 */
class VinDocuvalo extends Model
{
	protected $table = 'vin_docuvalo';
	protected $primaryKey = 'numero_dova';
	public $timestamps = false;

	protected $casts = [
		'docuadm_dova' => 'int',
		'tipo_dova' => 'int',
		'documento_dova' => 'int',
		'importe_dova' => 'float',
		'numerea_dova' => 'character',
		'docuvalo_dova' => 'int',
		'comision_dova' => 'float'
	];

	protected $fillable = [
		'docuadm_dova',
		'tipo_dova',
		'documento_dova',
		'importe_dova',
		'numerea_dova',
		'comentario_dova',
		'docuvalo_dova',
		'comision_dova'
	];
}
