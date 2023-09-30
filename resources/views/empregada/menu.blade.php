<div class="col-lg-3">
    <div class="hero__categories" style="  background-color: rgb(168, 172, 175);
    color: white;">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </div>
        <ul>
            <li><a href="{{Route('perfil.index')}}"> <i class="fa fa-user "></i> Pefil</a></li>
            <li><a href="{{Route('pedido.index')}}"> <i class="fa fa-comment "></i> Pedidos <span  class="badge badge-primary">{{Auth::user()->empregada->pedido->count()}}</span></a></li>
            <li><a href="{{Route('reclamacao.index')}}"><i class="fa fa-registered "></i> Reclamações <span  class="badge badge-primary">{{Auth::user()->empregada->reclamacao->count()}}</span></a></li>
            <li><a href="#"data-toggle="modal" data-target="#alterarsenha"><i class="fa fa-key fa-fw "></i> Alterar Senha</a></li>
            <li><a href="{{route('login.create')}}"   data-toggle="modal" data-target="#sair"><i class="fas fa-power-off "></i> Terminar sessão</a></li>
         
        </ul>
        @include('telas.sair')
    </div>
    @include('telas.alterarpasse')
</div>