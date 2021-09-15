<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function listar($id)
    {

/*DB_CONNECTION='pgsql'
DB_HOST=192.168.3.54
DB_PORT=5432
DB_DATABASE='prueba'
DB_USERNAME='eduardo'
DB_PASSWORD='mamibuena2008'*/
        $query = "SELECT
			nombre_usua AS usuario,
			m1.titulo_prog AS nombre_padre,
			m2.titulo_prog AS nombre_hijo,
			m1.numero_prog AS id_padre,
			m2.numero_prog AS id_hijo
			FROM acc_usuarios
			LEFT JOIN acc_menues AS i1 ON i1.padre_menu = menuini_usua
			LEFT JOIN acc_programas AS m1 ON m1.numero_prog = i1.programa_menu
			LEFT JOIN acc_menues AS i2 ON i2.padre_menu=i1.programa_menu
			LEFT JOIN acc_programas AS m2 ON m2.numero_prog = i2.programa_menu
			 WHERE numero_usua= " . $id .
            " order by 1,2";
        $results = DB::select($query);

        //$acc_usuario = DB::table('acc_usuarios')->get();
        return json_encode($results);
    }

    public function mostrarMenu($id)
    {
        $query = "SELECT numero_menu as idimenu,
                    programa_menu as idhijo,
                    padre_menu as idpadre,
                    menu.modulo_prog as menu_accion ,
                    menu.titulo_prog as menu_nombre,
                    menu.tipo_prog as menu_tipo
                    FROM acc_menues AS im
                    LEFT JOIN acc_programas AS menu  ON menu.numero_prog = im.programa_menu
                    WHERE padre_menu=" . $id;
        $results = DB::select($query);

        return json_encode($results);

    }

}
