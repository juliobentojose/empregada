@if(session('sucess'))
    @component( 'telas.alert ')
    @slot( 'class','success')
    @slot('name','Éxito')
    @slot('message',session('sucess'))
    @endcomponent
@endif
@if(session('info'))
    @component('telas.alert')
    @slot('class','info')
    @slot('name','Informação')
    @slot('message',session('info'))
    @endcomponent
@endif
@if(session('warning'))
    @component('telas.alert')
    @slot('class','warning')
    @slot('name','Advertencia')
    @slot('message',session('warning'))
    @endcomponent
@endif
@if(session('apagar'))
    @component('telas.alert')
    @slot('class','danger')
    @slot('name','Alerta')
    @slot('message',session('apagar'))
    @endcomponent
@endif
@if(session('erro'))
    @component('telas.alert')
    @slot('class','danger')
    @slot('name','Erro')
    @slot('message',session('erro'))
    @endcomponent
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
        @component('telas.alert')
        @slot('class','danger')
        @slot('name','Erro')
        @slot('message', $error)
        @endcomponent
    @endforeach
 
@endif
