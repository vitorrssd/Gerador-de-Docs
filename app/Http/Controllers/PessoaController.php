<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Mulher;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function pessoa()
    {
        return view('gerar_pessoas');
    }

    public function getPessoaData()
    {
        $information = Information::inRandomOrder()->first();
        return response()->json($information);
    }

    public function getMulherData()
    {
        $woman = Mulher::inRandomOrder()->first();
        return response()->json($woman);
    }
}
