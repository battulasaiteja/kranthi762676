<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  

  
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registration</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      background-image: url(field-agriculture-earth.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .registration-container {
      width: 400px;
      margin: 100px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .registration-container h2 {
      text-align: center;
      color: #333333;
    }

    .registration-container input[type="text"],
    .registration-container input[type="password"],
    .registration-container input[type="email"]
     {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .registration-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .registration-container input[type="submit"]:hover {
      background-color: #45a049;
    }

    .registration-container .form-group {
      margin-top: 10px;
    }

    .registration-container .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333333;
    }

    .registration-container .form-group input[type="checkbox"] {
      margin-top: 5px;
    }

    .registration-container .form-group .checkbox-label {
      margin-left: 5px;
      color: #333333;
    }

    .registration-container .form-group a {
      color: #4CAF50;
      text-decoration: none;
    }

    .registration-container .form-group a:hover {
      text-decoration: underline;
    }

    .registration-container .login-link {
      text-align: center;
      margin-top: 20px;
    }

    .registration-container .login-link span {
      color: #333333;
    }
    
    button{
        color: white;
        align-items: center;
        background-color: #01a500;
        border: none;
        padding: 10px 30px;
        font-weight: bold;
        border-radius: 8px;
        margin-left: 140px;
    }
    button:hover{
      background-color:#4CAF50 ;
    }
    </style>
</head>
<body>
  <div>
  <div class="registration-container">
  <h2>Registration</h2>
  <form class="" action="" method="post" autocomplete="off"><div>

    <div class="form-group">
    <label for="name">Name </label>
    <input type="text" name="name" id = "name" placeholder="Enter name" required value=""> 
    </div>

    <div class="form-group">
    <label for="username">Username </label>
    <input type="text" name="username" id = "username"placeholder="Enter username"required value=""> 
    </div>

   <div class="form-group">
   <label for="email">Email </label>
    <input type="email" name="email" id = "email"placeholder="Enter email" required value=""> 
   </div>

    <div class="form-group">
    <label for="password">Password </label>
    <input type="password" name="password" id = "password"placeholder="Enter password" required value=""> <br>
    </div>

    <div class="form-group">
    <label for="confirmpassword">Confirm Password</label>
    <input type="password" name="confirmpassword" id = "confirmpassword" placeholder="Enter confirm password" required value=""> 
    </div>
    
   
           
      </div>  
   <div class="form-group">
        
        <input type="checkbox" id="agree-checkbox" required>
        <label class="checkbox-label" for="agree-checkbox">I agree to the <a href="terms and conditions.html">Terms and Conditions</a></label>
        <hr>
        <br>
        </div class="button-signup">
       <button type="submit" name="submit">Register</button>
       <div>
        <p>Have an account? <a href="login.php">Login</a></p>
       
    </div>
   </div>
   
    </form>
  
  </div>
  
</body>
</html>