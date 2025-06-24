<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function loguearse(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión
        if (Auth::attempt($credentials)) {
            // Regenera la sesión
            $request->session()->regenerate();

            // Redirige al dashboard o página protegida
            return redirect()->intended('carrito');
        }

        // Si falló la autenticación
        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ])->onlyInput('email');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telefono' => 'required|string|max:20',
            'password' => 'required|string|min:6',
        ]);

        // Crear usuario
        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('login');
        
    }

    public function logout(Request $request){
         Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
