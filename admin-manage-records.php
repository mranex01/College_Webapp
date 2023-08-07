<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students-Manage</title>
    <?php require("css-files.php"); ?>
    <style>
 .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
table{
    width:80%;
    margin-top: 30px;
    margin-bottom:20px;
}
@media screen and (max-width: 600px){
  table{
    width:100%;
  }
}

table,th,td{
     
    border:1px solid black;
    padding:20px;
}
    </style>
</head>
<body>
<?php require("admin-header.php"); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Students</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    
    <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down">kk</i>
    </button>
    <div class="dropdown-content">
      <a href="admin-manage-records.php">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

&#9776;

<?php 
    require('db-connect.php'); 

    echo '<table align="center">';
    echo '<tr><th>Enrollment No.</th><th>Student Name</th><th>Sem</th><th>Department</th></tr>';
    
    $query = "SELECT * FROM `ycp`.`student-info`";
    $result = $con->query($query) or $err = mysqli_error($con);
    if(!isset($err))
    {
      while($finalRes = mysqli_fetch_array($result))
      {
        echo"<tr><td>". $finalRes['enrollment'] . "</td><td>" . $finalRes['name'] . "</td><td>" . $finalRes['semester'] . "</td><td>" . $finalRes['department'] . "</td></tr>";
      
      } 

    }
    else{
      echo "<tr><td> No Records!!</td></tr>";
    }

    echo '</table>';
?>
 
    
     

 


  
<?php require("footer.php"); ?>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    
</body>
</html>