<?php require("db-connect.php"); ?>
  



<?php
//$username_error = "";
//$password_error = "";
       
      $Entered_username = $_POST['username'];
      $Entered_password = $_POST['password'];

    $query = "SELECT * FROM `ycp`.`users` WHERE `username` = $Entered_username";

    $result = $con->query($query) or $err = mysqli_error($con);
    if(!isset($err))
    {
       $finalRes = mysqli_fetch_array($result);
       //echo $finalRes['name'];
       $username = $finalRes['username'];
       $password = $finalRes['password'];
       $role = $finalRes['role'];

      if($password == $Entered_password)
      {

        if($role == "student")
        {
          session_start();
          $_SESSION['username'] = $username;
          header("location: stud-home.php");
        }
        elseif ($role == "admin")
        {
          session_start();
          $_SESSION['username'] = $username;
          header("location: admin-home.php");
        }
        else
        {
          echo "<font color = 'RED'>Somthing went wrong!!!</font>";
          header("location: index.php");

        }
      }
      else{
      echo "<font color = 'RED'>Invalid Username or password</font>";

      }
    
    }
    else{
      echo mysqli_error($con);
      echo "<font color = 'RED'>Invalid user</font>";
    }
 
  




?>









 