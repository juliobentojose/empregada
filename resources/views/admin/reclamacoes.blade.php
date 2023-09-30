@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('admin.menu')
            <div class="col-lg-9">
                <h4>Reclamações</h4>
                @if ($ver->count()==0)
                <h3>Não tem Reclamações</h3>
                @else
                <div class="">
                    

                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style=" background-color: rgb(168, 172, 175);
    color: white;">
                                
                                <th>Motivo</th>
                                            
                                <th>Data da Reclamacao</th>
                                <th>Empregada em Causa</th>
                                


                            </tr>
                            @foreach($ver->sortByDesc('id') as $item)

                            <tr>
                                
                                <td>{{$item->conteudo}}</td>
                                <td>{{$item->created_at}}</td>
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