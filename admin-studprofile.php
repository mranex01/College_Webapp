<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <?php require("css-files.php"); 
?>
    <style>
    
  table{
    margin-top:73px;
    border:1px solid black;
    width:80%;
  }
  table,td{
    border:1px solid black;
  }
  td{
    padding:20px;
  }
    </style>
</head>  
<body>

<?php 
require("admin-header.php"); 
      require("db-connect.php");

      if(!isset($_POST['submit']))
      {
        echo "An error occured please try again!!";
      }
      else{
        
        $enrollment = $_POST['enrollment'];
        $query = "SELECT * FROM `ycp`.`student-info` WHERE `enrollment` = '$enrollment'";

        $result = $con->query($query) or $err = mysqli_error($con);
        if(!isset($err))
        {
          $finalRes = mysqli_fetch_array($result);
          $name = $finalRes['name'];
          $enrollment = $finalRes['enrollment'];
          $department = $finalRes['department'];
          $semester = $finalRes['semester'];
          $roll = $finalRes['roll'];
          $name = $finalRes['name'];
         
        }
        
        else{
          echo"jk";
        }
      }
?>
<center>
      <table>
        <tr><td>td1</td><td><b>Name:  </b><i><?php echo $finalRes['name']; ?></i></br><br><b>Department:  </b><i><?php echo $finalRes['department']; ?></i></br><br><b>Semester:  </b><i><?php echo $finalRes['semester']; ?></i></br><br></td></tr>
        <tr><td colspan=2><b>Birth Date:  </b><i><?php echo $finalRes['bdate']; ?></i></td></tr>
        <tr><td colspan=2><b>Enrollment No.:  </b><i><?php echo $finalRes['enrollment']; ?></i></td></tr>
        <tr><td colspan=2><b>Fees Status:  </b><i><?php echo $finalRes['fees-status']; ?></i></td></tr>
        <tr><td colspan=2><b>Total Fees:  </b><i><?php echo $finalRes['total-fees']; ?></i></td></tr>
        <tr><td colspan=2><b>Scholarship Status:  </b><i><?php echo $finalRes['scholarship-status']; ?></i></td></tr>
        <tr><td colspan=2><b>Schoarship Category:  </b><i><?php echo $finalRes['scholarship-category']; ?></i></td></tr>
        <tr><td colspan=2><b>Parents Contact:  </b><i><?php echo $finalRes['parents-contact']; ?></i></td></tr>
        <tr><td colspan=2><b>Contact No.:  </b><i><?php echo $finalRes['personal-contact']; ?></i></td></tr>
        <tr><td colspan=2><b>E-Mail:  </b><i><?php echo $finalRes['email']; ?></i></td></tr>
        <tr><td colspan=2><b>Address:  </b><i><?php echo $finalRes['address']; ?></i></td></tr>
        <tr><td colspan=2><b>Addmission Year:  </b><i><?php echo $finalRes['admission-year']; ?></i></td></tr>
      </table>
</center>
<?php require("footer.php"); ?>


    
</body>
</html>