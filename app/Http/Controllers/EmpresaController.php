<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * @param
     * @return Factory|View|Application
     */
    public function empresa()
    {
       
        return view('gerar_empresa');
    }
    public function index()
    {
        $empresa = Empresa::inRandomOrder()->first();

        return response()->json($empresa);
    }
}
