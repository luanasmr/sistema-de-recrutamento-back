<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CandidatosController;
use App\Http\Controllers\api\FuncionariosController;
use App\Http\Controllers\api\EmpresasController;
use App\Http\Controllers\api\VagasController;
use App\Http\Controllers\api\FasesController;
use App\Http\Controllers\api\ProcessosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/candidatos', [CandidatosController::class, 'index']);
Route::post('/candidatos', [CandidatosController::class, 'store']);
Route::put('/candidatos/{id}', [CandidatosController::class, 'update']);
Route::delete('/candidatos/{id}', [CandidatosController::class, 'destroy']);

Route::get('/funcionarios', [FuncionariosController::class, 'index']);
Route::post('/funcionarios', [FuncionariosController::class, 'store']);
Route::put('/funcionarios/{id}', [FuncionariosController::class, 'update']);
Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy']);

Route::get('/empresas', [EmpresasController::class, 'index']);
Route::post('/empresas', [EmpresasController::class, 'store']);
Route::put('/empresas/{id}', [EmpresasController::class, 'update']);
Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy']);

Route::get('/vagas', [VagasController::class, 'index']);
Route::post('/vagas', [VagasController::class, 'store']);
Route::put('/vagas/{id}', [VagasController::class, 'update']);
Route::delete('/vagas/{id}', [VagasController::class, 'destroy']);

Route::get('/fases', [FasesController::class, 'index']);
Route::post('/fases', [FasesController::class, 'store']);
Route::put('/fases/{id}', [FasesController::class, 'update']);
Route::delete('/fases/{id}', [FasesController::class, 'destroy']);

Route::get('/processos', [ProcessosController::class, 'index']);
Route::post('/processos', [ProcessosController::class, 'store']);
Route::put('/processos/{id}', [ProcessosController::class, 'update']);
Route::delete('/processos/{id}', [ProcessosController::class, 'destroy']);
