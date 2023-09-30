<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Criar conta</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="container-fluid" style="background-color:rgb(206, 210, 211);">
                <div class="row">
                    <div class="col-12">
                       
                    <form action="{{route('perfil.update',Auth::user()->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                     @csrf
                        <input type="hidden" name="id_empregada" value="{{Auth::user()->empregada->id}}">
                     <div class="card-body">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-1 col-form-label">Nome</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="txtnome" value="{{Auth::user()->name}}" required minlength="2" maxlength="30">

                                
                            </div>
                            <label for="bi" class="col-sm-2 col-form-label"> Nº do BI</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="bi"  name="txtbi"  minlength="2" maxlength="30" value="{{Auth::user()->empregada->bi}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="e" class="col-sm-1 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" id="e"  name="txtemail"  minlength="2" maxlength="30"  value="{{Auth::user()->email}} ">

                                
                            </div>
                            <label for="tl" class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="tl"  name="txttelefone"  minlength="1" min="1" maxlength="30"  value="{{Auth::user()->empregada->telefone}}">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="p" class="col-sm-4 col-form-label">Anos de experiencia de trabalho</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="p"   name="txtanotrabalho" value="{{Auth::user()->empregada->ano_trabalho}}" >
                            </div>
                            <label for="morada" class="col-sm-2 col-form-label">Morada</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="morada"  name="txtmorada" value="{{Auth::user()->empregada->morada}}">
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <p>Sexo: <label for=""></label>
                                    <input type="radio" name="txtsexo" id="mas" value="Masculino"  @if(Auth::user()->empregada->sexo=="Masculino")
                                    checked @endif>
                                    <label for="mas">Masculino</label>
                                    <input type="radio" name="txtsexo" id="fem" value="Femenino" @if(Auth::user()->empregada->sexo=="Femenino")
                                    checked @endif>
                                    <label for="fem">Femenino</label>
                                </p>
                            </div>
                            <label for="data" class="col-sm-3 col-form-label">Data de Nacimento</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="data"  name="txtdatanascimento" value="{{Auth::user()->empregada->data_nascimento}}" >
                            </div>
                        </div>
                     
                        <div class="form-group row">
                          
                            <label for="s" class="col-sm-4 col-form-label">Experiência de trabalho</label>
                            <div class="col-sm-7">
                                <textarea name="txtexperiencia" id="s" cols="40" rows="5">{{Auth::user()->empregada->experiencia}}</textarea >
                            </div>
                        </div>

                       
                       
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"> <i class="fa fa-save"></i> Salvar</button>
                        <button type="reset" class="btn btn-default ">Cancelar</button>

                    </div>
      

    </form>
                     
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>



