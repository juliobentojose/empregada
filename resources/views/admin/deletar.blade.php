<div class="modal fade" id="deletarempregada{{$item->user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-danger" >
                <h4 style=" color: rgb(250, 247, 247);">Apagar Empregada</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body" style="background-color:rgb(206, 210, 211);">
               <form action="{{route('deletarEmpregada', $item->user->id)}} " method="POST">
                 @csrf
                 @method('DELETE')
                   <h4>Desejas apagar esta empregada?</h4>
                    <div class="card-footer justify-content-between">
                        <button type="button" class="btn btn-defaut" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info float-right">Confirmar</button>
                       

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



