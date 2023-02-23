<?php

 
if (isset($_POST['submit']))
{
  require 'db_connection.php';

 $prenom = $_POST["Prenom"];
 $nom = $_POST["Nom"];
 $Pass = $_POST["Pass"];
 $nat = $_POST["Nat"];

  

 $sql = "SELECT * FROM users WHERE Nom='$nom'AND Prenom='$prenom'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
    header("Location: ../Aj.php?error=User_Exists");
    exit();
   }
else{
   
    
        $sql ="INSERT INTO users (Nom,Prenom,Pass,role)
        VALUES ('$nom','$prenom','$Pass','$nat')";
        mysqli_query($conn, $sql);
        header("Location: ../Aj.php?success=Utilisateur_Creer"); 
}
}




  else
  {
     header("Location: ../Aj.php");
     exit();
  }
 
  
  ?>
 