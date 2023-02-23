<?php

 
if (isset($_POST['submit']))
{
  require 'db_connection.php';

  $mat = $_POST["mat"];
  $num = $_POST["num"];
 


  $sql = "SELECT * FROM perso WHERE Matricule='$mat'";
  $selectRes = mysqli_query($conn, $sql);
  if( mysqli_num_rows( $selectRes )<>0 ){
   
    }
    else {
     header("Location: ../Retour.php?error=Matricule_Incorr");
     exit();
    }
    $sql = "SELECT * FROM eqpts WHERE NSerie='$num'";
    $selectRes = mysqli_query($conn, $sql);
    if( mysqli_num_rows( $selectRes )<>0 ){
     
      }
      else {
       header("Location: ../Retour.php?error=NSerie_Incorr");
       exit();
      }


      $sql = "SELECT * FROM eqpts
      INNER JOIN affectation
      ON eqpts.NSerie =affectation.Serie
      WHERE NSerie='$num' ;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )==0 ){
header("Location: ../Retour.php?error=Affectation Non Valide");
exit();
}

 

  
    $sqlo ="SELECT * FROM eqpts WHERE NSerie='$num'";
    $result = mysqli_query($conn, $sqlo);
    $resultc = mysqli_num_rows($result);
    if ($resultc > 0){
      while($row = mysqli_fetch_assoc($result)){

      
        $sqluy ="UPDATE eqpts SET 
                               
                               dispo=dispo+1 
                               
                            WHERE Nom='".$row['Nom']."'";
                    mysqli_query($conn, $sqluy);

                   $sqlp ="DELETE FROM affectation WHERE Serie='$num' ";
                    mysqli_query($conn, $sqlp);
                    header("Location: ../Retour.php?Success");

        }

    }
    


}




  else
  {
     header("Location: ../Services.php");
     exit();
  }
 
  
  ?>
 