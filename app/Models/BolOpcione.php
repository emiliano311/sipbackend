<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BolOpcione
 * 
 * @property int $numero_opci
 * @property character varying|null $nombre_opci
 * @property character varying|null $referencia_opci
 *
 * @package App\Models
 */
class BolOpcione extends Model
{
	protected $table = 'bol_opciones';
	protected $primaryKey = 'numero_opci';
	public $timestamps = false;

	protected $casts = [
		'nombre_opci' => 'character varying',
		'referencia_opci' => 'character varying'
	];

	protected $fillable = [
		'nombre_opci',
		'referencia_opci'
	];
}
