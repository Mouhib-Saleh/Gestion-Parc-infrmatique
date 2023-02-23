<?php
require "header2.php";
require 'includes/db_connection.php';

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Equipements</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
</head>

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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Services.php"><i class="fas fa-tachometer-alt"></i><span>Services</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="includes/logout.php"><i class="far fa-user-circle"></i><span>Log off</span></a></li>
                    
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
                <h3 class="text-dark mb-4">Equipements</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Type d'equipement</p>
                    </div>
                  <body>

                  <div id="wrapper"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div class="features-boxed">
        <div class="container">
           
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item" onclick="location.href='liste.php?type=Camera';">
                    <div class="box"><i class="fa fa-camera-retro icon"></i>
                        <h3 class="name">Surveillance</h3>
                        </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" onclick="location.href='liste.php?type=Micro Portable';">
                    <div class="box"><i class="fa fa-microchip icon"></i>
                        <h3 class="name">Micro-Portable</h3>
                      </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item"onclick="location.href='liste.php?type=Imprimante';">
                    <div class="box"><i class="fa fa-print icon"></i>
                        <h3 class="name">Imprimante </h3>
                       </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" onclick="location.href='liste.php?type=Tablette';">
                    <div class="box"><i class="fa fa-tablet icon"></i>
                        <h3 class="name">Tablette</h3>
                       </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" onclick="location.href='liste.php?type=Autre';">
                    <div class="box"><i class="fab fa-android icon"></i>
                        <h3 class="name">Autre </h3>
                     </div>
                </div>
               
               <?php 
                 if(isset($_SESSION['userid']) &&  $_SESSION['accessLevel'] == 'Admin') { 
                     ?>
                    <div class="col-sm-6 col-md-5 col-lg-4 item"onclick="location.href='Ajouter.php';">
                    <div class="box"><i class="fas fa-plus icon"></i>
                    <h3 class="name">Ajouter Eqpt</h3>
                    </div>

                
                    </div>
                 <?php } ?> 
                    
                  
                        
                
            </div>
        </div>
    </div>






                  </body>
    
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

