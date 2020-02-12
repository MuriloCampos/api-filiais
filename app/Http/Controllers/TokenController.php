<?php


namespace App\Http\Controllers;


use App\Usuario;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller;

class TokenController extends Controller
{
    public function gerarToken(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'senha' => 'required'
            ]);

        $usuario = Usuario::where('email', $request->email)->first();
        //var_dump($request->senha);
        //var_dump($usuario->senha);
        //exit();

        if(is_null($usuario) || !Hash::check($request->senha, $usuario->senha)){
            return response()->json('Usuário ou senha inválidos', 401);
        }

        $token = JWT::encode(
            ['email' => $request->email],
            env('JWT_KEY')
        );

        return [
            'access_token' => $token
        ];
    }
}
