




<div class="modal fade" id="Modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header btn-info" >
                <h4 style=" color: rgb(250, 247, 247);">Login</h4>
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">X
                    </button>
                <!-- <h4 class="modal-title" id="myModalLabel"> </h4>  -->
            </div>
            <div class="modal-body  " style="background-color:rgb(206, 210, 211);">


                <div class="card card-info p-3" style="background-color:rgb(157, 160, 161); color: rgb(0, 0, 0);"> 

                   
                        
                               
                
                   
                    <form method="POST" action="{{route('login.store')}}">
                        @csrf
                        
                 
                                <div class="input-group mb-3 ">
                                    <input type="email " class="form-control " name="txtemail" placeholder="Email " required minlength="5 " maxlength="50 " required autofocus >
                                    <div class="input-group-append ">
                                        <div class="input-group-text " style="background-color: white; ">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3 ">
                                    <input type="password" class="form-control " name="txtpassword" placeholder="Password " required minlength="5" maxlength="50">
                                    <div class="input-group-append ">
                                        <div class="input-group-text " style="background-color: white; ">
                                            <span class="fa fa-key fa-fw"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember" style="color: rgb(17, 17, 17); ">
                                  Lembrar Senha
                                </label>
                                </div>
            
            
            
                                <div class="form-group ">
                                    <button type="submit " class="form-control btn btn-primary ">  
                                        <i class="fas fa-user-lock "></i> Acessar</button>
                                        
                                </div>
            
            
                            </form>
            
                            <p class="mb-1 ">
                                <a href="# " style="color:rgb(19, 18, 18); ">Não sabes tua palavra passe?</a>
                                
                            </p>
                            <p></p>
            
               
                
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>





