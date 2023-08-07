<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <?php require("css-files.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 
      .searchby{
        padding:40px;
       
      }
     .searchby select{
        border:none;
        margin:20px;
        color:blue;
        outline:none;
        height:40px;
      }
      .searchby input[type="text"]{
        border:none;
        border-bottom:1px solid black;
        padding:5px;
        outline:none;
        width:250px;
      }
      .searchby input[type="submit"]{
        background:none;
        border:1px solid black;
        margin-top:20px;
        border-radius:10px;
        color:black;
        outline:none;
        width:100px;
      }
      .searchby input[type="submit"]:hover{
         background:black;
        border:1px solid white;
        color:white;
        }
      table{
        width:80%;
        padding:10px;
      }
      table, th, td{
        border:1px solid black;
        padding:10px;
        
      }
      .table-data input{
          background:none;
          border:none;
          outline:none;
      }

    </style>
<body>
<?php 
$title = "YCP - Students";
require("admin-header.php");?>
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs">
      <div class="container">
        <h2>Students</h2>
      </div>
    </div><!-- End Breadcrumbs -->
<center>
<form action="#" method="POST">
    <div class="searchby">
      <select name="select" id="">
        <option>enrollment</option>
        <option>semester</option>
        <option>department</option>
      </select>
      <input type="text" name="search" id="" title="Search here"></br>
      <input type="submit" value="Search" name="submit">
    </div>
</form>
</center>

<?php 
if(isset($_POST['submit']))
{ 
  //$SearchVal = $_POST['search'];
    require('db-connect.php');
 if(isset($_POST['search']))
 {

// ------=-------------------------------------------------------------------------------------------------------------------------
    if($_POST['search'] != "")
    {
     
        $selected_value = $_POST['select'];
        $searched_value = $_POST['search'];

        $query = "SELECT * FROM `ycp`.`student-info` WHERE $selected_value = '$searched_value'";

        echo '<table align="center" class="table-data">';
        echo '<tr><th>Enrollment No.</th><th>Student Name</th><th>Sem</th><th>Department</th></tr>';

        $result = $con->query($query) or $err = mysqli_error($con);
        if(!isset($err))
        {
            while($finalRes = mysqli_fetch_array($result))
           {

              $enrollment = $finalRes['enrollment'];
              $name = $finalRes['name'];
              $sem = $finalRes['semester'];
              $department = $finalRes['department'];
              

              echo" <form action='admin-studprofile.php' method='POST'>";
              echo"<tr><td><input type='text' name='enrollment' value='$enrollment' readonly /></td><td><input name='submit' type='submit' value='$name'></td><td>$sem</td><td>$department</td></tr>";
              echo"</form>";
            } 
        
        }
        else
        {
            echo "<tr><td> No Records!!</td></tr>";
            echo mysqli_error($con);
        }
      
        echo '</table>';


  }
  else
  {
      echo"<center><font color='red'>Please Search again!!!</font></center>";
  }

    
    
  }
} 
  else{
   
  }
?>
 


<?php require("footer.php"); ?>
</body>
</html> 