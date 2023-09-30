<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->categoria!="Administrador") {
            return view('empregada.pedido');
            
            }
            return view('admin.pedido');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $pedido=pedido::create(
            [
                'nome'=>$r->txtnome,
                'contacto'=>$r->txtcontacto,
                'endereco'=>$r->txtendereco,
                'id_empregada'=>$r->txtid,
               
            ]
            );
            if($pedido){
                return back()->with('sucess',' Pedido feito com sucesso!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        pedido::where('id_empregada', Auth::user()->empregada->id)->delete();
            
        return back()->with('apagar','Pedidos apagados com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pedido::find($id)->delete();
        return back()->with('apagar','Pedido apagado com sucesso');
    }
}
