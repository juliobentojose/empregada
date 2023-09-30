@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('admin.menu')
            <div class="col-lg-9">
                <h4>Pedidos</h4>
                @if ($ver->count()==0)
                <h3>Não tem Pedidos</h3>
                @else
                <div class="">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style="  background-color: rgb(77, 134, 69) ;
    color: white;">
                                
                                <th>Nome do cliente</th>
                                            
                                <th>Contacto</th>
                                <th>Endereço</th>
                                <th>Empregada Solicitada</th>
                                


                            </tr>
                            @foreach($ver->sortByDesc('id') as $item)

                            <tr>
                                
                                <td>{{$item->nome}}</td>
                                <td>{{$item->contacto}}</td>
                                <td>{{$item->endereco}}</td>
                                <td>{{$item->empregada->user->name }} 
                                    <img  width="50" height="50" style="border-radius: 100px;"  src="imagens/{{$item->empregada->foto}}"alt="Sem foto">  </td>
                                
                                
                              
    
                            </tr>
                            
                            @endforeach
                        </table>
                        <!-- /.contacts-list -->
    
                        </div>
                        @include('telas.sair')
                    </div>
                    @endif
                    <div class="col-6">
                 
                </div>
                @include('telas.alterarpasse')
            </div>
            
        </div>
    </div>
   
</section>





@endsection