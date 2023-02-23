<?php

 
if (isset($_POST['submit']))
{
  require 'db_connection.php';

 $num = $_POST["num"];
 $nom = $_POST["nom"];
 $type = $_POST["type"];
  

 $sql = "SELECT * FROM eqpts WHERE NSerie='$num'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
    header("Location: ../Ajouter.php?error=NSerie_exist");
    exit();
   }
else{
   
    $sql = "SELECT * FROM eqpts WHERE Nom='$nom'";
    $result = mysqli_query($conn, $sql);
    $resultc = mysqli_num_rows($result);
    if ($resultc > 0){
      while($row = mysqli_fetch_assoc($result)){

        $sql ="INSERT INTO eqpts (NSerie,Nom,Typ)
        VALUES ('$num','$nom','$type')";
        mysqli_query($conn, $sql);
         
     

      $sqluy ="UPDATE eqpts SET Qte='".$row['Qte']."' ,
                               dispo='".$row['dispo']."' ,
                               dispo=dispo+1 ,
                               Qte=Qte+1
                            WHERE Nom='".$row['Nom']."'";
                    mysqli_query($conn, $sqluy);
       

   }
       }
  else {
        $sql ="INSERT INTO eqpts (NSerie,Nom,Typ)
        VALUES ('$num','$nom','$type')";
        mysqli_query($conn, $sql);
              $sqll ="UPDATE eqpts SET dispo=1 ,Qte=1 
              WHERE Nom='$nom'";
              mysqli_query($conn, $sqll);
   
  }



header("Location: ../Ajouter.php");

}
}




  else
  {
     header("Location: ../eqpts.php");
     exit();
  }
 
  
  ?>
 