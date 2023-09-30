@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('empregada.menu')
            <div class="col-lg-9">
                <h4>Pedidos</h4>
                <div class="">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style="  background-color: rgb(77, 134, 69) ;
    color: white;">
                                
                           
                                <th>Nome</th>
                                <th>Contacto</th>
                                <th>Endereço</th>
                                <th>Data do Pedido</th>
                                <th>Opções</th>
                                
    
                            </tr>
                            @foreach(Auth::user()->empregada->pedido->sortByDesc('id') as $item)
    
                            <tr>
                               
                                
                                <td>{{$item->nome}}</td>
                                <td>{{$item->contacto}}</td>
                                <td>{{$item->endereco}}</td>
                                <td>{{$item->created_at}}</td>
                                
                                
                                <td>
                                   
                                    <a href=" " class="badge badge-danger"  data-toggle="modal" data-target="#deletarpedido{{$item->id}}" title="Apagar Pedido"><i class="fas fa-trash " ></i> </a>
    
                                    
                                </td>
    
                            </tr>
                            @include('telas.deletar')
                            @endforeach
                        </table>
                        <!-- /.contacts-list -->
    
                        </div>
                    </div>
                    <div class="col-6">
                 @include('telas.alterarpasse')
                </div>
                @include('telas.sair')
            </div>
        </div>
        
    </div>
   
</section>





@endsection