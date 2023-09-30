@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('empregada.menu')
            <div class="col-lg-9">
                <h3>Pagina Inicial</h3><br>
               
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
                                    
    
                                    <table class="table  table-hover tabela">
                                        <tr style="  background-color: rgb(77, 134, 69) ;
        color: white;">
                                             <th>Nome</th>
                                             <th>Contacto</th>
                                             <th>Endereço</th>
                                             <th>Data do Pedido</th>
                                            
    
    
                                        </tr>
                      @foreach(Auth::user()->empregada->pedido->sortByDesc   ('id') as $item)
    
                            <tr>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->contacto}}</td>
                                <td>{{$item->endereco}}</td>
                                <td>{{$item->created_at}}</td>
    
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
                                    
    
                                    <table class="table table-hover">
                                        <tr style=" background-color: rgb(77, 134, 69) ;
        color: white;">
                                            
                                            <th>Motivo</th>
                                            
                                            <th>Data da Reclamação</th>
                                            
    
    
                                        </tr>
                                        @foreach(Auth::user()->empregada->reclamacao->sortByDesc   ('id')  as $item)
    
                                        <tr>
                                            
                                            <td>{{$item->conteudo}}</td>
                                            <td>{{$item->created_at}}</td>
                                         
    
    
                                        </tr>
                                        @endforeach
                                    </table>
                                    <!-- /.contacts-list -->
    
    
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                          
                        
                     
                    </section>
                  
                </div>






           
            </div>







        </div>
    </div>
    
   
</section>





@endsection