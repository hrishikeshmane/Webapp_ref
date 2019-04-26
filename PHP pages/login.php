<?php
require_once 'dbconnect.php';
session_start();

$username=$password="";
if(isset($_POST['submit'])){
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if(!$username=='' && !$password=='')
  {
    $sql = "SELECT * FROM login where username='$username' and password='$password'";

    $query = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($query);

    if($count == 1){
      $_SESSION['username'] = $username;
      header("location:welcome.php");

    }else{
      echo "<script>alert('username and password is incorrect')</script>";
    }
  }else{
    echo "<script>alert('all fields should not be blank')</script>";
  }
}else{

}
 ?>

 <!DOCTYPE html>
 <html>
<head>
<title>Login form</title>
</head>
<body>
<h3>Login Form</h3>
<form action="" method="POST">
<label>Username</label><br>
<input type="text" name="username" placeholder="username"><br>
<label>Password</label><br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" name="submit" value="submit">
<p>Not Registered? <a href="register.php">Sign up</a></p>
</form>
</body>
 </html>
