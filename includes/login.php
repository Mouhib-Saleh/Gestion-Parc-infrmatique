<?php



if (isset($_POST['submit']))
{
  require 'db_connection.php';

  $uid = $_POST['Name'];
  $Last = $_POST['Last'];
  $Pass = $_POST['Pass'];


  
  
  
      $sql = "SELECT * FROM users WHERE Nom=? AND Prenom=? ;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../index.php?error=sqlerr");
          exit();

      }
      else {
          mysqli_stmt_bind_param($stmt,"ss",$uid,$Last);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)){
            $password_hash= password_hash($row['Pass'], PASSWORD_DEFAULT); 
            $pwdcheck = password_verify($Pass, $password_hash);
            if ($pwdcheck==false ){
                header("Location: ../index.php?error=Password");
                
          exit();

            }
            else if ($pwdcheck== true){
               session_start();
               $_SESSION['userid'] = $row['Nom'] ;
               $_SESSION['Pass'] = $Pass;
               $_SESSION['accessLevel'] = $row['role'];

               header("Location: ../Services.php?login=success");
          exit();

            }
            else {
                header("Location: ../index.php?error=sqlerr");
          exit();
            }


          }
          else {
            header("Location: ../index.php?error=User Details");
            exit();
          }

      }
  


}
else {
    header("Location: ../index.php?error=notlogedin");
    exit();
}


?>
