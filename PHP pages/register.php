<?php
require_once 'dbconnect.php';

$username=$password=$email=$mobile="";

if(isset($_POST['submit'])){
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $email = trim($_POST['email']);
  $mobile = trim($_POST['mobile']);

  $sql =" INSERT INTO registered(email,username,password) values('$email','$username','$password')";
	$sql1 =" INSERT INTO login(username,password) values('$username','$password')";
  $query = mysqli_query($conn,$sql);
	$query1 = mysqli_query($conn,$sql1);
  if($query){
    echo "<script>alert('you are registered successfully')</script>";
  }else{
    echo "<script>alert('sorry!! Error!!')</script>";
  }
}else{
  
}

 ?>

 <!DOCTYPE html>
 <html>
<head>
<title>Registration form</title>
</head>
<body>
<h3>Registration Form</h3>
<hr>
<form action="" method="POST">
  <label>Username</label><br>
  <input type="text" name="username" placeholder="enter your user name"><br>
  <label>Password</label><br>
    <input type="password" name="password" placeholder="enter your password"><br>
  <label>email</label><br>
    <input type="email" name="email" placeholder="enter your user email"><br>
  <label>mobile Number</label><br>
    <input type="text" name="mobile" placeholder="enter your mobileNo"><br>
    <input type="submit" name="submit" value="submit">
    <p>Already Registered? <a href="login.php">Sign In</a></p>

</form>
</body>
 </html>
