<?php

namespace App\Http\Controllers;

use App\Models\empregada;
use App\Models\pedido;
use App\Models\reclamacao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function empregada(){
    
        $ver=empregada::all();
        
        return view('admin.empregada',compact('ver'));
    }
    public function deletarEmpregada(){

    }
    public function verPedidos(){
        $ver=pedido::all();
        
        return view('admin.pedidos',compact('ver'));

    }
    public function verReclamacoes(){
        $ver=reclamacao::all();
        
        return view('admin.reclamacoes',compact('ver'));

    }
    public function verPefil(){
        return view('admin.perfil');
    }
    public function alterarPefil(Request $r){
        $usuario=User::where("email",$r->txtemail)->first();
        if ($usuario->id!=Auth::user()->id) { 
         return back()->with('apagar',' Já existe uma empregada com este email');
        }
        $use=User::find(Auth::user()->id)->update(
            [
                'name'=>$r->txtnome,
                'email'=>$r->txtemail,
               
            ]
            );
            if($use)
            return back()->with('sucess',' Alteração feita com Sucesso!');
    }
}
