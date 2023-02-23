<?php
require "header2.php";

?>


<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span><?php echo $_SESSION['userid'] ?></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Services.php"><i class="fas fa-table"></i><span>Services</span></a></li>
                 
                    <li class="nav-item" role="presentation"><a class="nav-link" href="includes/logout.php" ><i class="far fa-user-circle"></i><span>logout</span></a></li>
                   
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                       
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                         
                           
                           
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"> </span><img class="border rounded-circle img-profile" src="assets/img/logos/images.jpg"></a>
                                    
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
                <div class="container-fluid">
                    <br>
                   <center> <h3 class="text-dark mb-1">Ajouter</h3></center>
                    <br><br>
                    <div class="card shadow">
                    <div class="card-header py-3">
                    <form  action="includes/ajout.php"  method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">

    <label for="input4">Type</label>
          <select id="input5" class="form-control"  name="type" required >
            <option selected>Micro Portable</option>
            <option>Imprimante</option>
            <option>Camera</option>
            <option>Tablette</option>
            
            <option>Autre</option>
          </select>

    </div>
    <div class="form-group col-md-6">
      <label for="input5">Numero Serie</label>
      <input type="text" class="form-control" id="input5"  name="num" required placeholder="789549Yf1">
    </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="input5">Nom</label>
      <input type="text" class="form-control" id="input5"  name="nom"required  placeholder="G.E: Lenovo ideapad">
     
    </div>
    
    
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Ajouter</button> <a href="eqpts.php">     <button type="button" class="btn btn-primary" >Retour</button></a>
</form>
</div></div>         
                </div>
               

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Please Try again</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">
                                               <?php echo $_GET['error'] ?>
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             
                                             </div>
                                           </div>
                                         </div>
                                       </div>   

<?php
                                    if (isset($_GET['error'])){
                                     
                                     if ($_GET['error']== "NSerie_exist" ){
                                        
                                    echo "<p>hiiii</p>";
                                      echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModal").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                   
                                    
                                    }
                                    ?>




              
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright ©  Service 2020</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
                    