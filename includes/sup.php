<?php

require "../header2.php";
 
if (isset($_POST['submit']))
{
  require 'db_connection.php';

 $prenom = $_POST["Prenom"];
 $nom = $_POST["Nom"];
 $Pass = $_POST["Pass"];
 

  
 
 $sql = "SELECT * FROM users WHERE Nom='$nom' AND Prenom='$prenom'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
    
   if ($_SESSION['Pass']==$Pass){  
      
$sql ="DELETE FROM users WHERE  Nom='$nom' AND Prenom='$prenom'";
        mysqli_query($conn, $sql);
        header("Location: ../sup.php?success=Utilisateur_Supprimer"); 
    exit();
   }
   else {
     
      header("Location: ../sup.php?error=Wrong_Password"); 
      exit();
    }


    }
   
   
else{
   
   header("Location: ../sup.php?error=User_Not_Found"); 
   exit();
       
}


}




  else
  {
     header("Location: ../sup.php");
     exit();
  }
 
  
  ?>
 