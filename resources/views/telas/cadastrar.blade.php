<div class="modal fade" id="Modallogin1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                       
                    <form action="{{route('regitar.store')}}" method="POST"
                    enctype="multipart/form-data">
                     @csrf
        
                     <div class="card-body">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-1 col-form-label">Nome</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="txtnome" required minlength="2" maxlength="30">

                                
                            </div>
                            <label for="bi" class="col-sm-2 col-form-label"> Nº do BI</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="bi" placeholder="BI" name="txtbi"  minlength="2" maxlength="30"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="e" class="col-sm-1 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" id="e" placeholder="email" name="txtemail"  minlength="2" maxlength="30" required>

                                
                            </div>
                            <label for="tl" class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="tl" placeholder="Telefone" name="txttelefone"  minlength="1" min="1" maxlength="30" required>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="p" class="col-sm-1 col-form-label">Senha</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="p" placeholder="senha"  name="txtsenha" required minlength="6" maxlength="30" >
                            </div>
                            <label for="morada" class="col-sm-2 col-form-label">Morada</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="morada"  name="txtmorada" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cs" class="col-sm-3 col-form-label">Confirmar Senha</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="cs" placeholder="Confirmar Senha"required name="txtconfirmarsenha" required minlength="6" maxlength="30">
                            </div>
                            <label for="foto" class="col-sm-1 col-form-label">Foto</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control-file" id="foto"  name="foto" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <p>Sexo: <label for=""></label>
                                    <input type="radio" name="txtsexo" id="mas" value="Masculino" >
                                    <label for="mas">Masculino</label>
                                    <input type="radio" name="txtsexo" id="fem" value="Femenino" checked>
                                    <label for="fem">Femenino</label>
                                </p>
                            </div>
                            <label for="data" class="col-sm-3 col-form-label">Data de Nacimento</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="data"  name="txtdatanascimento"  required>
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label for="cs" class="col-sm-3 col-form-label">Ano de trabalho</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="cs"  name="txtanotrabalho" >
                            </div>
                            <label for="s" class="col-sm-2 col-form-label">Experiência de trabalho</label>
                            <div class="col-sm-4">
                                <textarea name="txtexperiencia" id="s" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                       
                       
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info" > <i class="fa fa-save"></i> Salvar</button>
                        <button type="reset" class="btn btn-default " data-dismiss="modal">Cancelar</button>

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



