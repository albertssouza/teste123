<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diario;

class DiarioController extends Controller
{
    public function Cadastro(){
        return view('cadastro');
    }

    public function Cadastrar(Request $req){
        $dados = [
            "nome" => $req->nome,
            "descricao" => $req->descricao,
            "email" => $req->email
        ];
        if($cadastro = Diario::create($dados)){
            return redirect()->route('home')->with('msg','Cadastro realizado com sucesso!');
        }
    }

    public function Edit($id){
        $dado = Diario::find($id);
        return view('cadastro',compact('dado'));
    }

    public function Update(Request $req, $id){
        $dados = [
            "nome" => $req->nome,
            "descricao" => $req->descricao,
            "email" => $req->email
        ];
        Diario::find($id)->update($dados);
        return redirect()->route('home')->with('msg','Alteração realizada com sucesso!');
    }

    public function Delete($id){
        if($deleted = Diario::find($id)->delete()){
            return redirect()->route('home')->with('msg','Pessoa excluida com sucesso!');
        }else{
            return redirect()->route('home')->with('msg','Não foi possivel excluir!');
        }
    }

}
