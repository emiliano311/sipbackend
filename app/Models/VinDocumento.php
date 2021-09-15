<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDocumento
 * 
 * @property int $numero_docu
 * @property Carbon|null $fecha_docu
 * @property int|null $persona_docu
 * @property int|null $tipo_docu
 * @property int|null $numedoc_docu
 * @property int|null $empresa_docu
 *
 * @package App\Models
 */
class VinDocumento extends Model
{
	protected $table = 'vin_documentos';
	protected $primaryKey = 'numero_docu';
	public $timestamps = false;

	protected $casts = [
		'persona_docu' => 'int',
		'tipo_docu' => 'int',
		'numedoc_docu' => 'int',
		'empresa_docu' => 'int'
	];

	protected $dates = [
		'fecha_docu'
	];

	protected $fillable = [
		'fecha_docu',
		'persona_docu',
		'tipo_docu',
		'numedoc_docu',
		'empresa_docu'
	];
}
