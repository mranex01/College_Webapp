<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YCP - Register</title>
  <?php include("css-files.php"); ?>
  <style>
    
    .login .extra-content{
      display:none;
      transition:1s;
    }
    .login{
      position:relative;
      margin: 30px 30px;
      width: 400px;
       
      padding: 40px;
      box-sizing:border-box;
      box-shadow: 10px 10px 10px rgba(11,11,11,70);
      border-radius: 10px; 
      background: #5fcf80;
      transition:0.8s;
    }




 {///////////////////////////hovering Effects/////////////////////////////////////////////////////}




      .login:hover{
        background:none;
      }
          
      .login:hover .extra-content{
        display:block;
      transition:1s;

      }

      .login:hover  h2{
      
      color :  #5fcf80;
       
    }
     
    .login:hover  .inputBox label{
       
       
      color:#5fcf80;
       

    }
    .login:hover  .inputBox input{
      
      border-bottom:2px solid #5fcf80;
       
      color: #5fcf80;
       
    }
      
    
    .login:hover  input[type='submit']{
       border:2px solid #5fcf80;
       color:black;
    }

    .login:hover  .inputBox input:focus ~ label
    {
       
      color: #5fcf80;
      
    }
  
    .login:hover  .inputBox input:valid ~ label
    {
       
      color: #5fcf80;
       
    }

    .login:hover  input[type="submit"]
    {
      
      background-color:#5fcf80;
   

    }
    
  



      {//////////////////////////////////////////////////////////////////////////////////////}
    .login h2{
      text-align:center;
      padding:0;
      color :  #fff;
      margin:0 0 30px;
    }
    .login .inputBox{
       
      position:relative;
    }
    .login .inputBox label{
       
      position:absolute;
      top:0;
      left:0;
      padding:10px 0;
      font-size:16px;
      color:#fff;
      pointer-events:none;
      transition:.5s;

    }
    .login .inputBox input{
      padding:10px 0;
      margin-bottom:30px;
      width:100%;
      border:none;
      background:none;
      border-bottom:2px solid #fff;
      outline:none;
      font-size:16px;
      background:transparent;
      color: black;
      letter-spacing:1px;
    }
      
    
    .login input[type='submit']{
       border:2px solid #fff;
       color:cyan;
    }

    .login .inputBox input:focus ~ label
    {
      top: -18px;
      left: 0;
      color: #fff;
      font-size: 12px;
    }
  
    .login .inputBox input:valid ~ label
    {
      top: -25px;
      left: 0;
      color: #fff;
      font-size: 12px;
    }

    .login input[type="submit"]
    {
      background:transparent;
      border:none;
      outline:none;
      color:black;
      background-color:#fff;
      padding: 10px 20px;
      cursor:pointer;
      border-radius:5px;

    }
    .login input[type="submit"]:hover
    {
  background:#fff;
    }
  
  </style>
</head>








<body>
<?php $title = "YCP - Register"; ?>

    <?php require("header.php"); ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Register to continue</h2>
      </div>
    </div><!-- End Breadcrumbs -->
<center>
    <div class="login">
      <h2>Register</h2>
      <form action="register-process.php" method="POST">
        <div class="inputBox">
          <input type="text" name="username" id="" required="">
          <label>Username</label>
        </div>
        <div class="inputBox">
          <input type="email" name="email" id="" required="">
          <label>E-Mail</label>
        </div>
        <div class="inputBox">
        <input type="password" name="password" id="" required="">
          <label>Password</label>
        </div>
        <div class="inputBox">
        <input type="password" name="password" id="" required="">
          <label>Confirm Password</label>
        </div>
        <input type="submit" value="Register">
        </form>
  </div>
  </center>
         
    <?php require("footer.php"); ?>
  
</body>
</html>