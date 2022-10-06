<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\combustivelController;
use App\Http\Controllers\tipoVeiculoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Na rota nao tem camelCase browse

Route::get('/', function () {
    return view('welcome');
});

// Rotas tabela Veiculo

Route::get('/veiculos',[VeiculosController::class,'index'])->name('listagem-veiculo');
Route::get('/cadastro',[VeiculosController::class,'formularioVeiculo']);
Route::post('/veiculo-salvar',[VeiculosController::class,'salvarVeiculo']);
Route::post('/veiculo-atualizar', [VeiculosController::class, 'atualizarVeiculo']);
Route::get('/visualizar-veiculo/{id_veiculo}',[VeiculosController::class,'abrirVeiculo']);
Route::get('/veiculo-deletar/{id_veiculo}',[VeiculosController::class,'deletarVeiculo']);

// Rotas tabela Combustivel

Route::get('/combustivel',[combustivelController::class,'index'])->name('listagem-combustivel');
Route::get('/cadastro-combustivel',[combustivelController::class,'formularioCombustivel']);
Route::post('/combustivel-salvar',[combustivelController::class,'salvarCombustivel']);
Route::post('/combustivel-atualizar', [combustivelController::class, 'atualizarCombustivel']);
Route::get('/visualizar-combustivel/{id_combustivel}',[combustivelController::class,'abrirCombustivel']);
Route::get('/combustivel-deletar/{id_combustivel}',[combustivelController::class,'deletarCombustivel']);

// Rotas tabela tipo veiculo

Route::get('/tipo-veiculo',[tipoVeiculoController::class,'index'])->name('listagem-tipo-veiculo');
Route::get('/cadastro-tipo-veiculo',[tipoVeiculoController::class,'formularioTipoVeiculo']);
Route::post('/tipo-veiculo-salvar', [tipoVeiculoController::class,'salvarTipoVeiculo']);
Route::post('/tipo-veiculo-atualizar',[tipoVeiculoController::class,'atualizarTipoVeiculo']);
Route::get('/visualizar-tipo-veiculo/{id}',[tipoVeiculoController::class,'abrirTipoVeiculo']);
Route::get('/tipo-veiculo-deletar/{id}',[tipoVeiculoController::class,'deletarTipoVeiculo']);
