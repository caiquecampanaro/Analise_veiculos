<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo; // import é a chamada , para a classe saber de onde está vindo essa informação
use App\Models\TipoVeiculo;

class VeiculosController extends Controller
{
    public function index () {

        $lista = Veiculo::all();

        return view('/veiculos/lista_veiculos',['nome'=>'Caique','idade'=>28,'listaVeiculo'=>$lista]);
    }

    public function formularioVeiculo () {
        $lista = TipoVeiculo::all();
        return view('/veiculos/cadastro_veiculos', ['listaTipoVeiculo'=>$lista]);
    }

    public function salvarVeiculo (Request $request ) {

        $veiculo = new Veiculo;
        $veiculo->fk_tipo_veiculo = $request->tipo_veiculo;
        $veiculo->placa = $request->placa;
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->ano = $request->ano;

        $veiculo->save();
        return redirect()->route('listagem-veiculo');
    }

    public function atualizarVeiculo (Request $request ) { // tudo que vem do request vem do formulario que preencheu na tela(browser)

        $veiculo = Veiculo::find($request->id_veiculo);
        $veiculo->fk_tipo_veiculo = $request->tipo_veiculo;
        $veiculo->placa = $request->placa;
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->ano = $request->ano;

        $veiculo->save();
        return redirect()->route('listagem-veiculo');
    }

    public function abrirVeiculo (Request $request, $id_veiculo) {

        $veiculo = Veiculo::find($id_veiculo); // find = select do mysql
        $lista = TipoVeiculo::all();
        return view ('veiculos/atualiza_veiculos', ['atualiza'=>$veiculo, 'listaTipoVeiculo'=>$lista]); // 'atualiza' nome da variavel que vai encontrar na view
    }
    public function deletarVeiculo ($id_veiculo) {
        Veiculo::find($id_veiculo)->delete();
        return redirect()->route('listagem-veiculo');
    }
}
