<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pendingdatum
 * 
 * @property int $seqid
 * @property bool $iskey
 * @property character varying|null $data
 * 
 * @property Pending $pending
 *
 * @package App\Models
 */
class Pendingdatum extends Model
{
	protected $table = 'pendingdata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'seqid' => 'int',
		'iskey' => 'bool',
		'data' => 'character varying'
	];

	protected $fillable = [
		'data'
	];

	public function pending()
	{
		return $this->belongsTo(Pending::class, 'seqid');
	}
}
