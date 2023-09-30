<?php

namespace App\Http\Controllers;

use App\Models\empregada;
use App\Models\pedido;
use App\Models\reclamacao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmpregadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    { 
       
        if (Auth::user()->categoria!="Administrador") {
            
        return view('empregada.index');
        }

        $user=User::all();
        $empregada=empregada::all();
        $pedido=pedido::all();
        $reclamacao=reclamacao::all();
    

        return view('admin.index',compact('user','empregada','pedido','reclamacao')); 
      
       

    } 
    
public function verEmpregada($id){
    
    $ver=empregada::find($id);
    
    return view('cliente.verEmpregada',compact('ver'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Hash::check($request->senhaatual, Auth()->user()->password))

        {
            return back()->with('erro','A palavra passe não corresponde com a actual!');
            
        }
        if ($request->novasenha!=$request->confirmarsenha) {
            return back()->with('erro','Palavra passe diferente usa a mesma para confirmar');
        } else {
            User::whereId(auth()->user()->id)->update([
                'password'=>Hash::make($request->novasenha)
            ]); return back()->with('sucess','Palavra passe alterada com sucesso!'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
