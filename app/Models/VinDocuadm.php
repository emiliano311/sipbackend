<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VinDocuadm
 * 
 * @property int $numero_doad
 * @property character varying|null $documento_doad
 * @property int|null $numedoc_doad
 * @property character varying|null $numereal_doad
 * @property Carbon|null $fecha_doad
 * @property int|null $tipopago_doad
 * @property int|null $persona_doad
 * @property float|null $aplicado_doad
 * @property int|null $tipo_doad
 * @property float|null $total_doad
 * @property string|null $comentario_doad
 * @property Carbon|null $fechapago_doad
 * @property int|null $comprador_doad
 * @property int|null $clienteaux_doad
 * @property int|null $empresa_doad
 * @property bool|null $pendent_doad
 * @property float|null $impefvo_doad
 * @property int|null $tipoventa_doad
 *
 * @package App\Models
 */
class VinDocuadm extends Model
{
	protected $table = 'vin_docuadm';
	protected $primaryKey = 'numero_doad';
	public $timestamps = false;

	protected $casts = [
		'documento_doad' => 'character varying',
		'numedoc_doad' => 'int',
		'numereal_doad' => 'character varying',
		'tipopago_doad' => 'int',
		'persona_doad' => 'int',
		'aplicado_doad' => 'float',
		'tipo_doad' => 'int',
		'total_doad' => 'float',
		'comprador_doad' => 'int',
		'clienteaux_doad' => 'int',
		'empresa_doad' => 'int',
		'pendent_doad' => 'bool',
		'impefvo_doad' => 'float',
		'tipoventa_doad' => 'int'
	];

	protected $dates = [
		'fecha_doad',
		'fechapago_doad'
	];

	protected $fillable = [
		'documento_doad',
		'numedoc_doad',
		'numereal_doad',
		'fecha_doad',
		'tipopago_doad',
		'persona_doad',
		'aplicado_doad',
		'tipo_doad',
		'total_doad',
		'comentario_doad',
		'fechapago_doad',
		'comprador_doad',
		'clienteaux_doad',
		'empresa_doad',
		'pendent_doad',
		'impefvo_doad',
		'tipoventa_doad'
	];
}
