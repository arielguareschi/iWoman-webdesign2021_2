<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function sobre(){
        $conteudo = Conteudo::where('id', '=', 5)->first();
        return view('sobre', compact('conteudo'));
    }
}
