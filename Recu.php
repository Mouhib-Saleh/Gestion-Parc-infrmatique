<?php

 
if (isset($_POST['submit']))
{
  require 'includes/db_connection.php';
     
 $mat = $_POST["mat"];
 $num = $_POST["num"];
 $nat = $_POST["nat"];
 $date = $_POST["date"];
 
 $sql = "SELECT * FROM perso WHERE Matricule='$mat'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
  
   }
   else {
    
    header("Location: Affectation.php?error=Matricule_Incorr");
    exit();
   }
   $sql = "SELECT * FROM eqpts WHERE NSerie='$num'";
   $selectRes = mysqli_query($conn, $sql);
   if( mysqli_num_rows( $selectRes )<>0 ){
    
     }
     else {
      header("Location: Affectation.php?error=NSerie_Incorr");
      exit();
     }

    
     $sql = "SELECT * FROM eqpts
             INNER JOIN affectation
             ON eqpts.NSerie =affectation.Serie
             WHERE NSerie='$num' ;";
   $selectRes = mysqli_query($conn, $sql);
   if( mysqli_num_rows( $selectRes )<>0 ){
    header("Location: Affectation.php?error=Equipement deja Affecte");
    exit();
     }
    






     $sql = "SELECT * FROM eqpts WHERE NSerie='$num'";
     $result = mysqli_query($conn, $sql);
     $resultc = mysqli_num_rows($result);
     if ($resultc > 0){
     while($row = mysqli_fetch_assoc($result)){
         if ($row['dispo']<=0){
          header("Location: Affectation.php?error=out of stock");
          exit();
         }
         else {



          $sql = "SELECT Nom FROM eqpts WHERE NSerie='$num'";
          $result = mysqli_query($conn, $sql);
          $resultc = mysqli_num_rows($result);
          if ($resultc > 0){
            while($row = mysqli_fetch_assoc($result)){
               

         $sqll ="UPDATE eqpts SET dispo= dispo-1 WHERE Nom='".$row['Nom']."'";
          mysqli_query($conn, $sqll);
        $sqloz ="INSERT INTO affectation (Matricule,Serie,dat,Nature)
      VALUES ('$mat','$num','$date','$nat');";
      mysqli_query($conn, $sqloz);
      

         }
        }
         
     }
   }
     
    


 
    
 }}

 else
 {
    header("Location: Affectation.php?err");
    exit();
 }

 
 ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Service</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<body>

<div class="container">

<br><br>
  <div class="row">
    <div class="col-sm">
    Annexe 4 de la N.C DOM N??<br><?php  echo $date     ?><br>N??:  <?php 

$sql ="SELECT * FROM affectation WHERE Serie='$num';";
$result = mysqli_query($conn, $sql);
$resultc = mysqli_num_rows($result);
   if ($resultc > 0){
     while($row = mysqli_fetch_assoc($result)){
         echo  $row['ID'] ;
     }
   }
   
?>
    </div>
    <div class="col-sm">
   
    </div>
    <div class="col-sm">
    <img src='' width='240' height='100'>
    </div>
  </div>


<div class="row">
          <div class="col-sm">
   
          </div>
     <div class="col-sm"> <br><br> <center>
          ACCUSE DE RECEPTION <br>
           <table border='1'>
              <tr><th width='230'> <center>
                 ?????? ??????<br> ?????????????? ???? ??????????
                  </th></tr>

            </table>
    </div>
       <div class="col-sm">
   
       </div>
  
</div>

<br>

<div class="row">

    <div class="col-sm"><center>
    <p style="text-align:left;">
    <?php 
         
         $sql =" SELECT * FROM perso WHERE matricule='$mat' ";
         $result = mysqli_query($conn, $sql);
         $resultc = mysqli_num_rows($result);
            if ($resultc > 0){
              while($row = mysqli_fetch_assoc($result)){
                  echo  $row['Nom'] ;
                  echo '_';
                  echo  $row['Prenom'] ;
              }
            }

   
?>
   </p>
    </div>
    
    <div class="col-sm"><center>
    <p style="text-align:right;">
    :?????????? ???????????? ????????????
    </p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:left;">
    <?php 

$sql ="SELECT * FROM perso WHERE Matricule='$mat';";
$result = mysqli_query($conn, $sql);
$resultc = mysqli_num_rows($result);

if ($resultc > 0){
   while($row = mysqli_fetch_assoc($result)){
       echo  $row['Departement'] ;
   }
}  
?> 
     :??????????????
  </p>
    </div>
    <div class="col-sm"><center>
    <p style="text-align:right;">
    <?php echo $mat ?>
  
    
    :?????????? ????????????
  </p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:right;">
    ???????? ???? ?????? ?????????????? ??????????????
    </p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm"><center>
     <table border ="1px"><tr>
          <td>?????????? ????????????????</td>
          <td><center>??????????</td>
          <td>?????????? ??????????????????</td>
           </tr>
           <tr>
           <td><?php echo $num ?></td>
          <td> <?php 

           $sql ="SELECT * FROM eqpts WHERE NSerie=$num ";
           $result = mysqli_query($conn, $sql);
           $resultc = mysqli_num_rows($result);
              if ($resultc > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo  $row['Nom'] ;
                }
              }
              
          ?>
          </td>

          <td> <?php 

$sql ="SELECT * FROM eqpts WHERE NSerie=$num ";
$result = mysqli_query($conn, $sql);
$resultc = mysqli_num_rows($result);
   if ($resultc > 0){
     while($row = mysqli_fetch_assoc($result)){
         echo  $row['Typ'] ;
     }
   }
   
?></td>
           </tr>



<table>
    </div>
  </div>





  
<br><br>
  <style>
    .dotted {border: 2px dotted black; border-style: none none dotted; color: #fff; background-color: #fff; }
</style>
<hr class='dotted' />

<style>
    .dotted2 {border: 2px dotted black; border-style: none none dotted; color: #fff; background-color: #fff; width : 5%  }
</style>
<hr class='dotted2' />

<br><br>


<div class="row">
    <div class="col-sm"><center>
    <p style="text-align:right;">
    :???????? ??????????   
    </p>
    </div>
  </div>
  


  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:left;">
    <?php 

$sql ="SELECT * FROM perso WHERE Matricule='$mat';";
$result = mysqli_query($conn, $sql);
$resultc = mysqli_num_rows($result);

if ($resultc > 0){
   while($row = mysqli_fetch_assoc($result)){
       echo  $row['Departement'] ;
   }
}  
?> 
   
    </p>
    </div>
    <div class="col-sm"><center>
    <p style="text-align:right;">
    :????????????   
    </p>
    </div>
  </div>

  <div class="row">
  <div class="col-sm"><center>
    <p style="text-align:left;">
   <?php echo $nat ?>
    </p>
    </div>
    <div class="col-sm"><center>
    <p style="text-align:right;">
    :?????? ??????????
    </p>
    </div>
   
  </div>
<br><br<br><br><br>
  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:left;">
     <?php echo $date ?> ???????? ???? 
    </p>
    </div>
  </div>
  <br><br><br><br><br><br><<br><br>

  <div class="row">
  <div class="col-sm"><center>
    <p style="text-align:left; font-weight: bold;">
    
    ??????????????
    </p>
    </div>
    <div class="col-sm"><center>
   
    <p style="text-align:right; font-weight: bold;">
    
    ??????????????
    </p>
    </div>
   
  </div>
  <br><br>

  <hr class='dotted' />
  <hr class='dotted2' />
  <br><br>

 <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:center;   font-weight: bold;">
    ?????????? ?????????????? ????????????????
    </p>
    </div>
  </div>

  
  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:left;">
    ?????????? ?????????????? <br> ??????????????
   
    </p>
    </div>
    <div class="col-sm"><center>
    <p style="text-align:right;">
    ???????????? ??????????  
    </p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:right; ">
    ............?????? ??????????????
    </p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm"><center>
    <p style="text-align:right; ">
    ............?????????????? <br>  ??????????????
    </p>
    </div>
  </div>
  <br><br><br>