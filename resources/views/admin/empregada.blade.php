@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('admin.menu')
            <div class="col-lg-9">
                <h4>Empregadas</h4>
                @if ($ver->count()==0)
                <h3>Não há empregada Ristada</h3>
                @else
                <div class="">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style="  background-color: rgb(77, 134, 69) ;
    color: white;">
                                
                           
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th>Morada</th>
                               
                                <th>Pedidos</th>
                                <th>Reclamações</th>
                                <th>Opções</th>
                                
    
                            </tr>
                            @foreach($ver->sortByDesc('id') as $item)
    
                            <tr>
                               
                                <td >
                                    <img  width="50" height="50" style="border-radius: 100px;"  src="imagens/{{$item->foto}}" alt="Sem foto">
                                </td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->telefone}}</td>
                                <td>{{$item->morada}}</td>
                                <td>{{$item->pedido->count()}}</td>
                                <td>{{$item->reclamacao->count()}}</td>
                                
                                
                                <td>
                                   
                                    <a href=" " class="badge badge-danger"  data-toggle="modal" data-target="#deletarempregada{{$item->user->id}}" title="Apagar Empregada"><i class="fas fa-trash " ></i> </a>
    
                                    
                                </td>
    
                            </tr>
                            @include('admin.deletar')
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