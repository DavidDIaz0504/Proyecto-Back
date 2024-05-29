<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirigir a la página de inicio de sesión u otra página
        return redirect()->route('login')->with('success', 'Usuario registrado exitosamente');
    }
}
