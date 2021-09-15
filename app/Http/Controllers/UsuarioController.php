<?php

namespace App\Http\Controllers;

use App\Models\accUsuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return accUsuario::all();
    }

    public function newUsuario(Request $request)
    {

        $request->validate([
            'login_usua'    => 'required',
            'password_usua' => 'required',
            'nombre_usua'   => 'required',
        ]);

        $usuario                = new accUsuario();
        $usuario->login_usua = $request->get('login_usua');
        $usuario->password_usua = $request->get('password_usua');
        $usuario->nombre_usua   = $request->get('nombre_usua');

        $usuario->save();
        return response()->json([
            "message" => "usuario creado",
        ], 201);

    }

    public function update(Request $request)
    {
         $request->validate([
             'numero_usua' => 'required',
            'login_usua'    => 'required',
            'password_usua' => 'required',
            'nombre_usua'   => 'required',
        ]);

        $usuario  = new accUsuario();
        $usuario2 = accUsuario::find($request->get('numero_usua'));

        $usuario2->login_usua = $request->get('login_usua');
        $usuario2->password_usua = $request->get('password_usua');
        $usuario2->nombre_usua   = $request->get('nombre_usua');

        try{
            $usuario2->save();
        }catch(Exception $e){
            return response()->json([
                'message' => 'error al actualizar el usuario'], 401); ;

        }
        return response()->json([
                'message' => 'usuario actualizado'], 201);
    }
    
    public function findById($id){
        $usuario = accUsuario::find($id);
        if($usuario == null){
            return response()->json([
                'message' => 'El usuario no existe'], 401);
        }
        return $usuario;
    }
    public function destroy($id)
    {

         try{
             $usuario = accUsuario::find($id);
            if($usuario != null){
                accUsuario::find($id)->delete();
                return response()->json([
                "message" => "usuario borrado"
                ], 202);
        } else {
            return response()->json([
            "message" => "usuario no existe"
            ], 404);
        }
      }catch(Exception $e){
            return response()->json([
                'message' => 'error al actualizar el usuario '.$e], 401); ;

        }
    }

    public function search($name)
    {
        //
        return usuario::where('nombre_usua', 'like', '%' . $name . '%')->get();
    }
}
