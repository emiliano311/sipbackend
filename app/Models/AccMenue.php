<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccMenue
 * 
 * @property int $numero_menu
 * @property int|null $programa_menu
 * @property int|null $padre_menu
 * @property int|null $orden_menu
 *
 * @package App\Models
 */
class AccMenue extends Model
{
	protected $table = 'acc_menues';
	protected $primaryKey = 'numero_menu';
	public $timestamps = false;

	protected $casts = [
		'programa_menu' => 'int',
		'padre_menu' => 'int',
		'orden_menu' => 'int'
	];

	protected $fillable = [
		'programa_menu',
		'padre_menu',
		'orden_menu'
	];
}
