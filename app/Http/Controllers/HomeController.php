<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diario;

class HomeController extends Controller
{
    public function index(){
        $dados = Diario::all();
        return view('index', compact('dados'));
    }
    
}
