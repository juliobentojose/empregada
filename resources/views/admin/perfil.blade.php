@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('admin.menu')
            <div class="col-lg-9">
                <h4>Meu Pefil</h4>
               
                <div class="container-fluid" style=" background-color: rgb(168, 172, 175) ;
                 color: rgb(15, 15, 15);">
                    
            
                        <!-- Profile Image -->
                        
                          
                           
                             
            
                            <h3 class="profile-username text-center">{{Auth::user()->categoria}} 
                                 </h3>
            
                            
            
                            <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                <b>Nome</b> <span class="float-right">{{Auth::user()->name}}</span>
                              </li>
                              <li class="list-group-item">
                                <b>Email</b> <span class="float-right">{{Auth::user()->email}}</span>
                              </li>
                             
                            
                             
                           
                              <div class="card-footer ">
              
                                <a href="" class="btn btn-primary " data-toggle="modal" data-target="#alterarsenha"><b>Alterar Senha</b> <i class="fa fa-key fa-fw "></i></a>
                                <a href=""  data-toggle="modal" data-target="#EdidarPerfil" class="btn btn-primary  float-right" ><b>Editar</b> <i class="fas fa-edit "></i></a>
                                
                               
              
                            </div>
                                        
                          </div>
                          @include('telas.sair')
                          </div>
                          
                       
                   
                    
                          @include('admin.editarperfil')
                    
                </section>
            </div>
            @include('telas.alterarpasse')
              
             </div>
   
</section>





@endsection