<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class AccUsuario
 *
 * @property int $numero_usua
 * @property character varying $login_usua
 * @property character varying $password_usua
 * @property character varying $nombre_usua
 * @property int|null $menuini_usua
 * @property bool|null $deshabilitado_usua
 * @property bool|null $foro_usua
 * @property bool|null $internet_usua
 * @property int|null $orden_usua
 * @property int|null $legajo_usua
 * @property int|null $menuweb_usua
 *
 * @package App\Models
 */
class AccUsuario extends Authenticatable
{
    protected $table      = 'acc_usuarios';
    protected $primaryKey = 'numero_usua';
    public $incrementing  = true;
    public $timestamps    = false;

    protected $casts = [
        'numero_usua'        => 'int',
        'login_usua'         => 'character varying',
        'password_usua'      => 'character varying',
        'nombre_usua'        => 'character varying',
        'menuini_usua'       => 'int',
        'deshabilitado_usua' => 'bool',
        'foro_usua'          => 'bool',
        'internet_usua'      => 'bool',
        'orden_usua'         => 'int',
        'legajo_usua'        => 'int',
        'menuweb_usua'       => 'int',
    ];

    protected $fillable = [
        'login_usua',
        'password_usua',
        'nombre_usua',
        'menuini_usua',
        'deshabilitado_usua',
        'foro_usua',
        'internet_usua',
        'orden_usua',
        'legajo_usua',
        'menuweb_usua',
    ];

    protected $attributes = [
        'internet_usua' => 1,
        'menuini_usua'  => 1,
    ];
}
