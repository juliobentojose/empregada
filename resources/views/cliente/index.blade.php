@extends('cliente.inicio') 
@section('principal')
<section class="related-blog spad">
    <div class="conta mr-5 ml-5">
        @include('telas.flash')
      
        <div class="col-lg-12">
            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="{{route('inicio.index')}} " method="GET">
                        @csrf
                        <div class="hero__search__categories">
                            Empregadas
                            
                        </div>
                        <input type="text" placeholder="Anos de experiencia" name="pesquisar">
                        <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Pesquisar</button>
                    </form>
                </div>
               
            </div>
           
        </div>
        <div class="row">
            @foreach($empregada as $item)
                           
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item " style="background-color: rgb(229, 236, 236);  height: 430px" >
                    <div class="blog__item__pic">
                       <a href="{{route('verEmpregada', $item->id)}}">
                        <img width="500" height="300"  src="imagens/{{$item->foto}}" alt="Sem foto" ></a>
                    </div>
                    <div class="hero__categories">
                       
                        <ul>
                            <li><h5><b>Nome:</b> {{$item->user->name}}</h5></li>
                            <li><h6><b>Anos de experiencia: </b>{{$item->ano_trabalho}} Anos</h6></li>
                            <li><a href="{{route('verEmpregada', $item->id)}}"><p></p><i class="fa fa-eye "></i> Ver Mais</a></li>
                         
                        </ul>
                    </div>

                </div>
            </div>
            @endforeach
            @if(count($empregada)==0 && $pesquisar )
            <p>
                <h6>Não foi possível encontrar empregada com este anos de trabalho: <b>{{$pesquisar}}</b> </h6><a href="{{route('inicio.index')}}" class="btn btn-default  "><i class="fas fa-eye"></i> Exibir todas</a>

            </p>
           

@elseif(count($empregada)==0)
<p>
<h6>Não há empregada Ristada</h6>
</p>

@else
        </div>
        @endif
        @include('telas.login');
    </div>
    
    @include('telas.cadastrar');
</section>

@endsection