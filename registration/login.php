<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--link rel="stylesheet" type="text/css" href="assets/css/cssstyles.css"-->
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<style type="text/css">
  body{
  margin: 0;
  padding: 0;
  background: url(bg4.jpg);
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
  background-attachment: fixed;

} 
</style> 
  <div class="loginbox">
    <img src="loginimage.png" class="loginimage">

    <h1> Login here </h1>
    <form method="post" action="login.php">
    <?php include('errors.php'); ?>
      <p> Username </p>
      <input type="text" name="Username" placeholder="Enter Username">
      <p>Password</p>
      <input type="Password" name="pass" placeholder="Enter Password"><br>
      <input type="submit" name="sub" value="LOGIN"><br>
      <a href="#">Lost Your Password? </a><br>
      <a href="register.php">Sign-up Now!!</a><br>

    </form>
    
  </div>
  

</body>
</html>