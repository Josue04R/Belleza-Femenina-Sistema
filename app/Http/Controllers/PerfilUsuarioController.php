<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerfilUsuarioController extends Controller
{
    public function index()
    {
        return view('perfil.index');
    }

    public function edit(){
        $user = Auth::user();
        return view('perfil.editar', compact('user'));
    }

    public function update(Request $request){
        /** @var User $user */
        $user = Auth::user();
        
       
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'telefono' => 'required|string|max:20',
            'password' => 'nullable|confirmed|min:6',
        ]);

   
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->telefono = $request->telefono;

        // Si hay contraseña nueva, encriptarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('perfil.editar')->with('success', 'Perfil actualizado con éxito.');
    }

    public function delete(){
        /** @var User $user */
        $user = Auth::user();

        Auth::logout();          
        $user->delete();        

        return redirect('/');
    }
}
