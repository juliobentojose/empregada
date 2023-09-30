<div class="col-lg-3">
    <div class="hero__categories" style="  background-color: rgb(168, 172, 175);
    color: white;">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </div>
        <ul>
            <li><a href="{{route('verPerfil')}}"> <i class="fa fa-user "></i> Pefil</a></li>
            <li><a href="{{route('empregada')}}"> <i class="fa fa-users "></i> Empregadas</a></li>
            <li><a href="{{route('verPididos')}}"> <i class="fa fa-comment "></i> Pedidos <span  class="badge badge-primary"></span></a></li>
            <li><a href="{{Route('verReclamacoes')}}"><i class="fa fa-registered "></i> Reclamações </a></li>
            <li><a href="#"data-toggle="modal" data-target="#alterarsenha"><i class="fa fa-key fa-fw "></i> Alterar Senha</a></li>
            <li><a href=""   data-toggle="modal" data-target="#sair"><i class="fas fa-power-off "></i> Terminar sessão</a></li>
         
        </ul>
        @include('telas.sair')
    </div>
    @include('telas.alterarpasse')
</div>