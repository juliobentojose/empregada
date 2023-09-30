<?php

namespace App\Http\Controllers;

use App\Models\empregada;
use App\Models\funcionario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empregada.perfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        user::whereId( Auth::user()->id)->delete();
        return redirect()->route('inicio.index')->with('apagar','Conta Apagada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)

    {
        if ($r->txtsenha!=$r->txtconfirmarsenha) {
            return back()->with('erro','Palavra passe diferente usa a mesma para confirmar');
        } else {
        $usuario=user::where("email",$r->txtemail)->first();
        if ($usuario) { 
         return back()->with('apagar',' Já existe uma empregada com este email');
        }
        $use=User::create(
            [
                'name'=>$r->txtnome,
                'email'=>$r->txtemail,
                'categoria'=>"Empregada",
                'password'=>Hash::make($r->txtsenha),
               
            ]
            );
            if($use){
                $empregada=new empregada();

                $empregada->telefone=$r->txttelefone;
                $empregada->sexo=$r->txtsexo;
                $empregada->morada=$r->txtmorada;
                $empregada->bi=$r->txtbi;
                $empregada->ano_trabalho=$r->txtanotrabalho;
                $empregada->experiencia=$r->txtexperiencia;
                $empregada->data_nascimento=$r->txtdatanascimento;
                $empregada->id_user=$use->id;

                if($r->hasFile('foto') && $r->file('foto')->isValid())
                {
           
                    $imageName = time().'.'.$r->foto->extension();
                    $r->foto->move(public_path('imagens'), $imageName);
                    $empregada->foto=$imageName;  
                }
                
                  $empregada->save();
                    return back()->with('sucess',' Registada com Sucesso!');

            }
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
    public function update(Request $r, $id)
    {
        $usuario=user::where("email",$r->txtemail)->first();
        if ($usuario->id!=$id) { 
         return back()->with('apagar',' Já existe uma empregada com este email');
        }
        $use=User::find($id)->update(
            [
                'name'=>$r->txtnome,
                'email'=>$r->txtemail,
                
                
               
            ]
            );
            if($use){
                empregada:: find($r->id_empregada)->update([
                    'telefone'=>$r->txttelefone,
                    'sexo'=>$r->txtsexo,
                    'morada'=>$r->txtmorada,
                    'bi'=>$r->txtbi,
                    'ano_trabalho'=>$r->txtanotrabalho,
                    'experiencia'=>$r->txtexperiencia,
                    'data_nascimento'=>$r->txtdatanascimento,
                    
                ]);

               

             
                
                  
                    return back()->with('sucess',' Alteração feita com Sucesso!');

            }
            
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
