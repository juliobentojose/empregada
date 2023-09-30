<?php

namespace App\Http\Controllers;

use App\Models\reclamacao;
use Illuminate\Http\Request;

class ReclamacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empregada.reclamacoes');
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
    public function store(Request $r,)
    {
        $pedido=reclamacao::create(
            [
                'conteudo'=>$r->txtconteudo,
                
                'id_empregada'=>$r->txtid,
               
            ]
            );
            if($pedido){
                return back()->with('sucess',' Reclamação feita com sucesso!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function show(reclamacao $reclamacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function edit(reclamacao $reclamacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reclamacao $reclamacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(reclamacao $reclamacao)
    {
        //
    }
}
