<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        # VALIDACION DE CREDENCIALES
        if (!Auth::validate($credentials)) {
            return redirect()->route('login.show')->withErrors('Credenciales inválidas');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }


    public function authenticated(Request $request, $user)
    {
        return redirect()->route('home.index');
    }
}
