@extends('cliente.inicio') 
@section('principal')
<section class="hero">
    <div class="conta m-2">
        @include('telas.flash')
        <div class="row">
            @include('empregada.menu')
            <div class="col-lg-9">
                <h4>Reclamações</h4>
                <div class="">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
    
    
                        <table class="table   table-hover ">
                            <tr style=" background-color: rgb(77, 134, 69) ;
    color: white;">
                                
                           
                                
                                <th>Motivo da Reclamacão</th>
                                <th>Data da Reclamacão</th>
                               
                                
    
                            </tr>
                            @foreach(Auth::user()->empregada->reclamacao->sortByDesc('id') as $item)
    
                            <tr>
                               
                                
                                <td>{{$item->conteudo}}</td>
                               
                                <td>{{$item->created_at}}</td>
                                
                                
                               
    
                            </tr>
                            @include('telas.deletar')
                            @endforeach
                        </table>
                        <!-- /.contacts-list -->
    
                        </div>
                    </div>
                    <div class="col-6">
                 
                </div>
                @include('telas.sair')
            </div>
            @include('telas.alterarpasse')
        </div>
    </div>
   
</section>





@endsection