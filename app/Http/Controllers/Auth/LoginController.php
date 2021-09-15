<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  
    if ($this->attemptLogin($request)) {
        $user = Auth::user();
        $success['user'] = $user;
        return response()->json($success, 200);
    }

    return $this->sendFailedLoginResponse($request);
}

public function logout()
{
    $user = Auth::user();
    $user->token()->revoke();
    $user->token()->delete();

    return response()->json(null, 204);        
}
    
//   public function login(Request $request){
//     $credentials = $request->only('email', 'password');
//     $this->validateLogin($request);
// 	$userusuario = Input::get('login_usua');
// 	$password = Input::get('password_usua');

// 		if (Auth::attempt(['login_usua' => $userusuario, 'password_usua' => $password]))
//         {
//             return response()->json(compact('login_usua'),202);
//         }
//         return response()->json(compact('login_usua'),400);
// 	}
    
}
