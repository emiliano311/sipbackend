<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\AccUsuarios;
use Illuminate\Support\Facades\Auth;
use Validator;
class PassportController extends Controller
{
    public $successStatus = 200;

    public function login($request request){
        print($request('login_usua'));
        if(Auth::attempt(['login_usua' => $request('login_usua'), 'password_usua' => $request('password_usua')])){
            $user = Auth::usuario();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}
