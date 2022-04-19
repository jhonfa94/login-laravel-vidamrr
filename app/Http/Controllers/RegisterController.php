<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    # mostrar vista de registro
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('auth.register');
    }

    # registrar usuario
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect()->route('login.show')->with('success', 'Usuario registrado correctamente');
    }
}
