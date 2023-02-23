<?php
require "header.php";


?>



<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Service</h4>
                                    </div>
                                
                                    

                                    
                                    <form class="user" action="includes/login.php"  method="POST" >
                                        <div class="form-group"><input class="form-control form-control-user" type="text" id="nom"  placeholder="Nom" name="Name"required></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="text"   placeholder="Prenom" name="Last"required></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="Pass"required></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Login</button>
                                        <hr>
                                        <hr>
                                    </form>
                                    
                                   
                                      
                                  
    
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Login Erreur</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">
                                               Please verify your <?php echo $_GET['error'] ?>
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             
                                             </div>
                                           </div>
                                         </div>
                                       </div>   
                                       <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Can't Access</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">
                                               You need to  <?php echo $_GET['error'] ?>
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             
                                             </div>
                                           </div>
                                         </div>
                                       </div>   


                                       <?php
                                    if (isset($_GET['error'])){
                                     if ($_GET['error']== "Password"|| $_GET['error']=="User Details" ){
                                        

                                        echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModal").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                   
                                  else if ($_GET['error']== "logIn" ){
                                        

                                        echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModal2").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                    
                                    }
                                    ?>


                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>