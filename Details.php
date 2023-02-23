<?php
require "header2.php";
require 'includes/db_connection.php';
$tp =$_GET['ID'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table -  Service</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
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
                       
                        </form>
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
                <h3 class="text-dark mb-4">Affectation N° <?php echo $tp ?></h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">detaile d'affectation</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                               
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">

                     



<table class="table dataTable my-0" id="dataTable">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Departement</th>
                <th>Matricule</th>
                
                <th>Type</th>
                <th>NSerie</th>
                <th>Date</th>
                <th>Nature</th>
            </tr>
        </thead>
        <tbody>



                     <?php 
                     
                     $selectSQL = "SELECT e.Nom,e.Typ,e.Nserie,p.Nom,p.Prenom,p.Departement,a.dat,a.Nature,p.Matricule

                     FROM affectation AS a
                        INNER JOIN
                        eqpts AS e
                        ON a.Serie = e.NSerie
                        INNER JOIN
                        perso AS p
                        ON a.Matricule = p.Matricule
                        WHERE a.ID=$tp;";
                     $selectRes = mysqli_query( $conn,$selectSQL );
                     if( mysqli_num_rows( $selectRes )<>0 ){
                        while( $row = mysqli_fetch_assoc( $selectRes ) ){
        echo" <tr>
        <td>
        {$row['Nom']}_{$row['Prenom']}</td>
        <td>{$row['Departement']}</td>
        <td>   {$row['Matricule']} </td>
     
        <td>   {$row['Typ']} </td>
        <td>   {$row['Nserie']} </td>
        <td>{$row['dat']}<br></td>
        <td>{$row['Nature']}</td>
    </tr>";
  

                  
                    }  
                }                  
?>
                               
                                
                                </tbody>
                                <tfoot>
                                   
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                            <a href="table.php">     <button type="button" class="btn btn-primary" >Retour</button></a>
                             
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
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