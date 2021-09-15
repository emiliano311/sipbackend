<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccUsuarioprog
 * 
 * @property int $numero_uspr
 * @property int|null $usuario_uspr
 * @property int|null $programa_uspr
 * @property character varying|null $altapor_uspr
 *
 * @package App\Models
 */
class AccUsuarioprog extends Model
{
	protected $table = 'acc_usuarioprog';
	protected $primaryKey = 'numero_uspr';
	public $timestamps = false;

	protected $casts = [
		'usuario_uspr' => 'int',
		'programa_uspr' => 'int',
		'altapor_uspr' => 'character varying'
	];

	protected $fillable = [
		'usuario_uspr',
		'programa_uspr',
		'altapor_uspr'
	];
}
