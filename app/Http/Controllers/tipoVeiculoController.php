<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoVeiculo;

class tipoVeiculoController extends Controller
{
    public function index () {

        $tipo_veiculo = TipoVeiculo::all();

        return view ('/tipo-veiculo/lista_tipo_veiculo', ['listaTipoVeiculo'=>$tipo_veiculo]);
    }

    public function formularioTipoVeiculo () {
        return view('/tipo-veiculo/cadastro_tipo_veiculo');
    }

    public function salvarTipoVeiculo (Request $request) {
        $tipo_veiculo = new TipoVeiculo;
        $tipo_veiculo->tipo_veiculo = $request->tipo_veiculo;

        $tipo_veiculo->save();
        return redirect()->route('listagem-tipo-veiculo');
    }

    public function atualizarTipoVeiculo (Request $request) {
        $tipo_veiculo = TipoVeiculo::find($request->id);
        $tipo_veiculo->tipo_veiculo = $request->tipo_veiculo;

        $tipo_veiculo->save();
        return redirect()->route('listagem-tipo-veiculo');
    }

    public function abrirTipoVeiculo (Request $request, $id) {
        $tipo_veiculo = TipoVeiculo::find($id);
        return view ('/tipo-veiculo/atualiza_tipo_veiculo', ['atualizarTipoVeiculo'=>$tipo_veiculo]);
    }

    public function deletarTipoVeiculo ($id) {
        TipoVeiculo::find($id)->delete();
        return redirect()->route('listagem-tipo-veiculo');
    }

}
