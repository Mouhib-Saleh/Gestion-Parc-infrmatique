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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="eqpts.php"><i class="fas fa-table"></i><span>Equipements</span></a></li>
                 
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
                   <center> <h3 class="text-dark mb-1">Services</h3></center>
                    <br><br>
                   
                </div>
                <div>
                    <div class="container" style="center">
                      <br> <center> <div><a class="btn btn-primary btn-icon-split" role="button" href="Affectation.php"><span class="text-white-50 icon"><i class="fas fa-flag"></i></span><span class="text-white text" style="width: 180px;">Affectation des Eqpts</span></a></div>
                      <br> <div><a class="btn btn-info btn-icon-split" role="button"  href="Retour.php"><span class="text-white-50 icon"><i class="fas fa-info-circle"></i></span><span class="text-white text" style="width: 180px;">Retour Equipements</span></a></div>

                      <?php 
                 if(isset($_SESSION['userid']) &&  $_SESSION['accessLevel'] == 'Admin') { 
                     ?>
                   <br>  <div><a class="btn btn-warning btn-icon-split" role="button" href="Aj.php" style="width: 222px;"><span class="text-white-50 icon" style="width: 40;"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text" style="width: 180px;">Ajouter Utilisateur</span></a></div>
                   <br>  <div><a class="btn btn-secondary btn-icon-split" role="button" href="sup.php" style="width: 222px;"><span class="text-white-50 icon" style="width: 40;"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text" style="width: 180px;">Supprimer Utilisateur</span></a></div>
                 
                 
                 <?php } ?> 


                      
                      <br>  <div><a class="btn btn-danger btn-icon-split" role="button" style="width: 222px;" href="table.php"><span class="text-white-50 icon" style="width: 40;"><i class="fas fa-trash"></i></span><span class="text-white text" style="width: 180px;">Historique</span></a></div>
                    </div>
                </div>
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
                    