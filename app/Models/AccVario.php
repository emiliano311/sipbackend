<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccVario
 * 
 * @property int $numero_vari
 * @property character varying $campo_vari
 * @property int|null $orden_vari
 * @property character varying|null $nombre_vari
 * @property character varying|null $corto_vari
 * @property float|null $valor_vari
 * @property character varying|null $codigo_vari
 * @property bool $habilitado_vari
 * @property character varying|null $filtro_vari
 * @property bool|null $default_vari
 * @property string|null $observacion_vari
 * @property character varying|null $estfisico_vari
 * @property int|null $entero_vari
 *
 * @package App\Models
 */
class AccVario extends Model
{
	protected $table = 'acc_varios';
	protected $primaryKey = 'numero_vari';
	public $timestamps = false;

	protected $casts = [
		'campo_vari' => 'character varying',
		'orden_vari' => 'int',
		'nombre_vari' => 'character varying',
		'corto_vari' => 'character varying',
		'valor_vari' => 'float',
		'codigo_vari' => 'character varying',
		'habilitado_vari' => 'bool',
		'filtro_vari' => 'character varying',
		'default_vari' => 'bool',
		'estfisico_vari' => 'character varying',
		'entero_vari' => 'int'
	];

	protected $fillable = [
		'campo_vari',
		'orden_vari',
		'nombre_vari',
		'corto_vari',
		'valor_vari',
		'codigo_vari',
		'habilitado_vari',
		'filtro_vari',
		'default_vari',
		'observacion_vari',
		'estfisico_vari',
		'entero_vari'
	];
}
