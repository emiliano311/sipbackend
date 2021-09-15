<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoggedAction
 * 
 * @property int $event_id
 * @property string $schema_name
 * @property string $table_name
 * @property oid $relid
 * @property string|null $session_user_name
 * @property timestamp with time zone $action_tstamp_tx
 * @property timestamp with time zone $action_tstamp_stm
 * @property timestamp with time zone $action_tstamp_clk
 * @property int|null $transaction_id
 * @property string|null $application_name
 * @property inet|null $client_addr
 * @property int|null $client_port
 * @property string|null $client_query
 * @property string|null $action
 * @property USER-DEFINED|null $row_data
 * @property USER-DEFINED|null $changed_fields
 * @property bool $statement_only
 *
 * @package App\Models
 */
class LoggedAction extends Model
{
	protected $table = 'logged_actions';
	protected $primaryKey = 'event_id';
	public $timestamps = false;

	protected $casts = [
		'relid' => 'oid',
		'action_tstamp_tx' => 'timestamp with time zone',
		'action_tstamp_stm' => 'timestamp with time zone',
		'action_tstamp_clk' => 'timestamp with time zone',
		'transaction_id' => 'int',
		'client_addr' => 'inet',
		'client_port' => 'int',
		'row_data' => 'USER-DEFINED',
		'changed_fields' => 'USER-DEFINED',
		'statement_only' => 'bool'
	];

	protected $fillable = [
		'schema_name',
		'table_name',
		'relid',
		'session_user_name',
		'action_tstamp_tx',
		'action_tstamp_stm',
		'action_tstamp_clk',
		'transaction_id',
		'application_name',
		'client_addr',
		'client_port',
		'client_query',
		'action',
		'row_data',
		'changed_fields',
		'statement_only'
	];
}
