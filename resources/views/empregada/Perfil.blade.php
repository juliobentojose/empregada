@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('empregada.menu')
            <div class="col-lg-9">
                <h4>Meu Pefil</h4>
                <div class="col-lg-12 text-center blog__details__author__pic">
                    <img src="imagens/{{Auth::user()->empregada->foto}}" alt="">
               
                </div>
                <div class="container-fluid" style="  background-color: rgb(168, 172, 175);
                 color: rgb(15, 15, 15);">
                    
            
                        <!-- Profile Image -->
                        
                          
                           
                             
            
                            <h3 class="profile-username text-center">{{Auth::user()->name}}
                                 </h3>
            
                            <h5 class="text-muted text-center">{{Auth::user()->categoria}}</h5> 
            
                            <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                <b>Email</b> <span class="float-right">{{Auth::user()->email}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Telefone</b> <span class="float-right">{{Auth::user()->empregada->telefone}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Morada</b> <span class="float-right">{{Auth::user()->empregada->morada}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>BI</b> <span class="float-right">{{Auth::user()->empregada->bi}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Anos de experiencia de trabalho</b> <span class="float-right">{{Auth::user()->empregada->ano_trabalho}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Sexo</b> <span class="float-right">{{Auth::user()->empregada->sexo}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Data de Nascimento</b> <span class="float-right"> {{Auth::user()->empregada->data_nascimento}}</span>
                              </li>
                            </ul>
                           
                              <div class="card-footer ">
              
                                <a href="" class="btn btn-danger float-right" data-toggle="modal" data-target="#apagarconta"><b>Apagar Conta</b> <i class="fa fa-trash"></i></a>
                                <a href=""  data-toggle="modal" data-target="#editar" class="btn btn-primary  " ><b>Editar</b> <i class="fas fa-edit "></i></a>
                                
                               
              
                            </div>
                                        
                          </div>
                          </div>
                          
                       
                   
                    
                          @include('telas.editarempregada')
                    
                </section>
            </div>
            @include('telas.alterarpasse')
              
             </div>
    @include('telas.apagarconta')
</section>





@endsection