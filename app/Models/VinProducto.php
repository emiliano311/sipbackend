<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VinProducto
 * 
 * @property int $numero_prod
 * @property character varying|null $codigo_prod
 * @property character varying|null $nombre_prod
 * @property int|null $tipo_prod
 * @property float|null $precio1_prod
 * @property float|null $precio2_prod
 * @property float|null $precio3_prod
 * @property string|null $comepre1_prod
 * @property string|null $comepre2_prod
 * @property string|null $comepre3_prod
 * @property float|null $costo_prod
 * @property character varying|null $marca_prod
 * @property character varying|null $bodega_prod
 * @property character varying|null $cepa_prod
 * @property string|null $comentarios_prod
 * @property int|null $botxcaja_prod
 * @property int|null $grupo_prod
 * @property character|null $color_prod
 * @property character|null $nombetiq_prod
 * @property bool $recargopintura_prod
 * @property float|null $preciopub_prod
 *
 * @package App\Models
 */
class VinProducto extends Model
{
	protected $table = 'vin_productos';
	protected $primaryKey = 'numero_prod';
	public $timestamps = false;

	protected $casts = [
		'codigo_prod' => 'character varying',
		'nombre_prod' => 'character varying',
		'tipo_prod' => 'int',
		'precio1_prod' => 'float',
		'precio2_prod' => 'float',
		'precio3_prod' => 'float',
		'costo_prod' => 'float',
		'marca_prod' => 'character varying',
		'bodega_prod' => 'character varying',
		'cepa_prod' => 'character varying',
		'botxcaja_prod' => 'int',
		'grupo_prod' => 'int',
		'color_prod' => 'character',
		'nombetiq_prod' => 'character',
		'recargopintura_prod' => 'bool',
		'preciopub_prod' => 'float'
	];

	protected $fillable = [
		'codigo_prod',
		'nombre_prod',
		'tipo_prod',
		'precio1_prod',
		'precio2_prod',
		'precio3_prod',
		'comepre1_prod',
		'comepre2_prod',
		'comepre3_prod',
		'costo_prod',
		'marca_prod',
		'bodega_prod',
		'cepa_prod',
		'comentarios_prod',
		'botxcaja_prod',
		'grupo_prod',
		'color_prod',
		'nombetiq_prod',
		'recargopintura_prod',
		'preciopub_prod'
	];
}
