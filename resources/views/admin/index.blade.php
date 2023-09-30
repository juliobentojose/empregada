@extends('cliente.inicio') 
@section('principal')


<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories" style="  background-color: rgb(168, 172, 175);
                color: white;">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                    </div>
                    <ul>
                        <li><a href="{{route('verPerfil')}}"> <i class="fa fa-user "></i> Pefil</a></li>
                        <li><a href="{{route('empregada')}}"> <i class="fa fa-users "></i> Empregadas <span  class="badge badge-primary">{{$empregada->count()}}</span></a></li>
                        <li><a href="{{route('verPididos')}}"> <i class="fa fa-comment "></i> Pedidos <span  class="badge badge-primary">{{$pedido->count()}}</span></a></li>
                        <li><a href="{{Route('verReclamacoes')}}"><i class="fa fa-registered "></i> Reclamações  <span  class="badge badge-primary">{{$reclamacao->count()}}</span> </a></li>
                        <li><a href="#"data-toggle="modal" data-target="#alterarsenha"><i class="fa fa-key fa-fw "></i> Alterar Senha</a></li>
                        <li><a href=""   data-toggle="modal" data-target="#sair"><i class="fas fa-power-off "></i> Terminar sessão</a></li>
                     
                    </ul>
                    @include('telas.sair')
                </div>
                @include('telas.alterarpasse')
            </div>
          
            <div class="col-lg-9">

                <h3>Pagina Inicial do Administrador</h3><br>
                <div class="">
                    <h5>    Empregadas</h5>
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style="  background-color: rgb(77, 134, 69) ;
    color: white;">
                                
                           
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th>Morada</th>
                                
                                
    
                            </tr>
                            @foreach($empregada->sortByDesc('id') as $item)
    
                            <tr>
                               
                                
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->telefone}}</td>
                                <td>{{$item->morada}}</td>
                                
                            </tr>
                            @include('telas.deletar')
                            @endforeach
                        </table>
                        <!-- /.contacts-list -->
    
                        </div>
                    </div> <br>
                    
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7">
                        <!-- Custom tabs (Charts with tabs)-->
    
                          
                                
                            <!-- /.card-header -->
                            <div class="">
                                <h5 >Pedidos</h4>
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    
    
                                    <table class="table  table-hover ">
                                        <tr style="  background-color: rgb(77, 134, 69) ;
        color: white;">
                                            
                                            <th>Nome do cliente</th>
                                            
                                            <th>Contacto</th>
                                            <th>Endereço</th>
                                            
    
    
                                        </tr>
                                        @foreach($pedido->sortByDesc('id') as $item)
    
                                        <tr>
                                            
                                            <td>{{$item->nome}}</td>
                                            <td>{{$item->contacto}}</td>
                                            <td>{{$item->endereco}}</td>
                                            
                                         
    
    
                                        </tr>
                                        @endforeach
                                    </table>
                                    <!-- /.contacts-list -->
    
    
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                     
                    </section>
                    <section class="col-lg-5">
                     
                            <div class="">
                                <h5>Reclamações</h5>
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    
    
                                    <table class="table  table-hover ">
                                        <tr style="  background-color: rgb(77, 134, 69) ;
        color: white;">
                                            
                                            <th>Motivo</th>
                                            
                                            <th>Emp Relacionada</th>
                                            
    
    
                                        </tr>
                                        @foreach($reclamacao->sortByDesc('id') as $item)
    
                                        <tr>
                                            
                                            <td>{{$item->conteudo}}</td>
                                            <td>{{$item->empregada->user->name}}</td>
                                         
    
    
                                        </tr>
                                        @endforeach
                                    </table>
                                    <!-- /.contacts-list -->
    
    
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                          
                        
                     
                    </section>
                  
                </div>

                 
                @include('telas.sair')
            </div>
        </div>
    </div>
   
</section>





@endsection