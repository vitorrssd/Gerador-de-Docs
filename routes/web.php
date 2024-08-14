<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\CreditoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::prefix('/home')->group(function ()
{
    Route::get('/pessoa', [PessoaController::class, 'pessoa']);
    Route::get('/empresa', [EmpresaController::class, 'empresa']);
    Route::get('/veículo', [VeiculoController::class, 'veiculo']);
    Route::get('/crédito', [CreditoController::class, 'crédito']);
});
Route::get('/pessoa/ajax', [PessoaController::class, 'getPessoaData']);
Route::get('/empresa/ajax', [EmpresaController::class, 'index']);
Route::get('/veículo/ajax', [VeiculoController::class, 'index']);
Route::get('/mulher/ajax', [PessoaController::class, 'getMulherData']);
Route::get('/test-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexão ao banco de dados bem-sucedida!";
    } catch (\Exception $e) {
        die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
    }
});
