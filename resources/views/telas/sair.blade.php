


<div class="modal fade" id="sair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Terminar Sessão</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body" style="background-color:rgb(206, 210, 211);">
               <form action="{{route('login.create')}} ">
                 @csrf
               
                   <h4>Desejas terminar a Sessão?</h4>
                    <div class="card-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info float-right">Sim</button>
                       

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



