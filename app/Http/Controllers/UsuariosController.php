<?php


namespace App\Http\Controllers;


use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(Usuario::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha)
            ]), 201);
    }
}
