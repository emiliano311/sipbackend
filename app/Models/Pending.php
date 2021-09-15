<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pending
 * 
 * @property int $seqid
 * @property character varying $tablename
 * @property character|null $op
 * @property int $xid
 * @property timestamp without time zone|null $tstamp
 * @property character varying|null $user
 * @property bool $procesado
 * @property int|null $clave
 * 
 * @property Collection|Pendingdatum[] $pendingdata
 *
 * @package App\Models
 */
class Pending extends Model
{
	protected $table = 'pending';
	protected $primaryKey = 'seqid';
	public $timestamps = false;

	protected $casts = [
		'tablename' => 'character varying',
		'op' => 'character',
		'xid' => 'int',
		'tstamp' => 'timestamp without time zone',
		'user' => 'character varying',
		'procesado' => 'bool',
		'clave' => 'int'
	];

	protected $fillable = [
		'tablename',
		'op',
		'xid',
		'tstamp',
		'user',
		'procesado',
		'clave'
	];

	public function pendingdata()
	{
		return $this->hasMany(Pendingdatum::class, 'seqid');
	}
}
