<div class="modal fade" id="alterarsenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Alterar senha</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body" style="background-color:rgb(206, 210, 211);">
               
                 <form class="form-horizontal" action="{{route('alterar.store')}}" method="Post">
                      
                    @csrf
                 
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-4 col-form-label">Senha Actual</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputName" name="senhaatual" placeholder="Senha Actual"  required minlength="6" maxlength="30">
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-4 col-form-label"> Nova Senha</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputName" name="novasenha"placeholder="Nova Senha" required minlength="6" maxlength="30">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-4 col-form-label"> Confirmar Senha</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="confirmarsenha"id="inputName" placeholder="Confirmar Senha" required minlength="6" maxlength="30">
                      </div>
                    </div>
                    
                    <div class="card-footer ">
                              <button type="submit " class="btn btn-info form-control"> <i class="fas fa-save "></i> Salvar </button>

                             

                          </div>
                    
                      
                    
                  </form>
      
                </form>
    
                     
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>