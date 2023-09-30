@extends('cliente.inicio') 
@section('principal')

<!-- Blog Details Hero End -->

<!-- Blog Details Section Begin -->
<section class="blog-details">
    <div class="container">
      @include('telas.flash')
        <div class="row">
        
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text">
                    <img height="650" width="700" src="../imagens/{{$ver->foto}} " alt="">
                        
                        
                    <p>{{$ver->experiencia}}</p>
                </div>
               
            </div>
            <div class="col-lg-4 col-md-5 order-md-1 order-1">
                <div class="">
                    <div class="card card-primary " >
                        <div class="card-body" >
                        
          
                          <h3 class="profile-username text-center">{{$ver->user->name}}
                               </h3>
          
                     
          
                          <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                              <b>Email</b> <span class="float-right">{{$ver->user->email}}</span>
                            </li>
                           
                            <li class="list-group-item">
                              <b>Telefone</b> <span class="float-right">{{$ver->telefone}}</span>
                            </li>
                            <li class="list-group-item">
                              <b>Anos de experiencia</b> <span class="float-right">{{$ver->ano_trabalho}}</span>
                            </li>
                            <li class="list-group-item">
                              <b>Morada</b> <span class="float-right">{{$ver->morada}}</span>
                            </li>
                            <li class="list-group-item">
                              <b>Data de Nascimento</b> <span class="float-right " >{{$ver->data_nascimento}}</span>
                            </li>
                           
                          </ul>
                             <button class="btn btn-secondary form-control" data-toggle="modal" data-target="#reclamcao{{$ver->id}}"> Fazer Reclamacão</button>
                          
                        </div>
                        <!-- /.card-body -->
                      </div>

                    <div class="card card-primary card-outline mt-4 pl-2" >
                        <h4 class="profile-username text-center pt-3" >Entrar em contacto</h4>
                        <div class="row">
                            
                            <div class="col-12">
                                
                                <form action="{{route('enviar.store')}}" method="POST">
                                    @csrf
                            <input type="hidden" name="txtid" value="{{$ver->id}}">
                                <div class="card-body"> 
                                   
                                    <div class="form-group row">
                                        <label for="nome" class="col-sm-4 col-form-label">Nome</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="txtnome" required minlength="2" maxlength="40">
                                        </div>
                                        </div>
                                    <div class="form-group row">
                                        <label for="c" class="col-sm-4 col-form-label">Contacto</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="c" placeholder="Contacto" name="txtcontacto" required minlength="2" maxlength="30">
                                        </div>
                                        </div>
                                    
                                        
                                            <textarea class="form-control" name="txtendereco"  placeholder="Escreva aqui seu endereço" id=""  rows="3"></textarea>
                                        
                                       
                                        <div class="card-footer ">
                                            <button type="submit " class="btn btn-primary form-control"> <i class="fas fa-location-arrow"></i> Enviar</button>
            
                                            
                                        </div>
                                </div>
                            
                    </form>
                        </div>
                        </div>
                    
                </div>
                @include('telas.login');
    </div>
            </div>
            @include('telas.reclamacao');
        </div>
        @include('telas.cadastrar');
   
</div>


</section>

@endsection
