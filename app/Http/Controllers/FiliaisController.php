<?php


namespace App\Http\Controllers;


use App\Filial;
use Illuminate\Http\Request;

class FiliaisController
{
    public function index()
    {
        return Filial::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(Filial::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $filial = Filial::find($id);
        if(is_null($filial)){
            return response()->json('', 204);
        }
        return response()->json($filial);
    }

    public function update(int $id, Request $request)
    {
        $filial = Filial::find($id);
        if(is_null($filial)){
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        $filial->fill($request->all());
        $filial->save();
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = Filial::destroy($id);
        if($qtdRecursosRemovidos === 0){
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        return response()->json('', 204);
    }
}
