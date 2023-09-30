<div class="modal fade" id="reclamcao{{$ver->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Fazer Reclamação</h4>
                
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body" style="background-color:rgb(206, 210, 211);">
               <form action="{{route('reclamacao.index')}}" method="POST">
                 @csrf
                 <input type="hidden" name="txtid" value="{{$ver->id}}">
        

                 <div class="form">
                    
                        <textarea name="txtconteudo" id="s" cols="" class="form-control" rows="5" placeholder="Motivo da Reclamacão"></textarea>
                    
                </div>
                    <div class="card-footer">
                       
                        <button type="submit" class="btn btn-info form-control"> <i class="fa fa-location-arrow"></i> Enviar</button>
                       

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



