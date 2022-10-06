<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combustivel;

class combustivelController extends Controller
{

    public function index () {

        $combustivel = Combustivel::all();

        return view('/combustivel/lista_combustivel', ['listaCombustivel'=>$combustivel]);
    }

    public function formularioCombustivel () {
        return view('/combustivel/cadastro_combustivel');
    }

    public function salvarCombustivel (Request $request) {

        $combustivel = new Combustivel;
        $combustivel-> tipo_combustivel = $request-> tipo_combustivel;

        $combustivel->save();
        return redirect()->route('listagem-combustivel');
    }

    public function atualizarCombustivel (Request $request) {
        $combustivel = Combustivel::find($request->id_combustivel);
        $combustivel-> tipo_combustivel = $request-> tipo_combustivel;

        $combustivel->save();
        return redirect()->route('listagem-combustivel');
    }

    public function abrirCombustivel (Request $request, $id_combustivel) {
        $combustivel = Combustivel::find($id_combustivel);
        return view('/combustivel/atualiza_combustivel', ['atualizarCombustivel'=>$combustivel]);
    }

    public function deletarCombustivel ($id_combustivel) {
        Combustivel::find($id_combustivel)->delete();
        return redirect()->route('listagem-combustivel');
    }

}
