<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Veiculo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * @param
     * @return Factory|View|Application
     */
    public function veiculo()
    {

        return view('veículo');
    }
    public function index()
    {
        $veiculo = Veiculo::inRandomOrder()->first();

        return response()->json($veiculo);
    }
}
