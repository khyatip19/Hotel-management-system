<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-up Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
    <div class="signupbox">
        <img src="loginimage.png" class="loginimage">
        <h2>Register</h2>
        <form method="post" action="register.php">
        	  <?php include('error.php'); ?>
        	  <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username<?php echo $username; ?>">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email<?php echo $email; ?>">
            <p>Password</p>
            <input type="password" name="password_1" placeholder="Enter Password">        
            <p>Confirm password</p>
            <input type="password" name="password_2" placeholder="Re-Enter Password"> 
            <input type="submit" name="reg_user" value="REGISTER"><br>
            <p> Already a member? <a href="login.php">Login in</a> </p>
        </form>
    </div>
</body>
</html>