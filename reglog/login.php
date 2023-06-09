<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(field-agriculture-earth.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 86vh;
    margin: 0;
    padding: 0;
  }

  .login-container {
    width: 300px;
    margin: 100px auto;
    background-color: #ffffff;
    
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .login-container h2 {
    text-align: center;
    color: #333333;
  }

  .login-container input[type="text"],
  .login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .login-container button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color:#1877f2;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .login-container button[type="submit"]:hover {
    background-color: #1877f2;
  }

  .login-container .form-group {
    text-align: center;
    margin-top: 20px;
  }

  .login-container .form-group a {
    color: #333333;
    text-decoration: none;
  }

  .login-container .form-group a:hover {
    text-decoration: underline;
    text-decoration-color: #4CAF50;
    
  }
  .login-container .register-link button{
    color: #ffffff;
    background-color: #4CAF50;
    margin-top: 20px;
    text-decoration: none;
    border: none;
    padding: 10px 40px;
    margin-left: 75px;
    border-radius:5px ;
  }
  .login-container .forgotten{
    margin-left: 80px;

  }
  
    
     </style>
</head>
<body>
    <div class="login-container">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <input type="text" name="usernameemail" id = "usernameemail" placeholder="Username" required value=""> <br>
      <input type="password" name="password" id = "password" placeholder="Password"  required value=""> <br>
      <button type="submit" name="submit">Login</button>
      
    </form>
    <br>
    <div class="register-link">
            <div class="forgotten"><a href="#">Forgotten password?</a><br></div>
            <hr class="forgotten-hr">
             <div class="registration-link">
             <button><a href="registration.php">Register</a></button>
             </div>
          </div>
          
    </div>
    
</body>
</html>