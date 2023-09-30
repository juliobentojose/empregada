<div class="modal fade" id="EdidarPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Editar Perfil</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body" style="background-color:rgb(206, 210, 211);">
               
                 <form class="form-horizontal" action="{{route('alterarPefil')}}" method="Post">
                      
                    @csrf
                 
                    <div class="form-group row">
                      <label for="i" class="col-sm-4 col-form-label">Nome</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="i" placeholder="Nome" name="txtnome" value="{{Auth::user()->name}}" required minlength="2" maxlength="30">
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="e" class="col-sm-4 col-form-label"> Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="e"  name="txtemail"  minlength="2" maxlength="30"  value="{{Auth::user()->email}} ">
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