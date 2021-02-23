<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">
</head>
<body>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: url(assets/images/bg4.jpg);
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            background-attachment: fixed;
        } 
        .btn{
            border:none;
            outline: none;
            height: 40px;
            background:LightSeaGreen;
            color: #000000;
            font-size: 18px;
            border-radius: 5px;
            opacity: 1.0;
        }
        .btn:hover{
            cursor: pointer;
            background:RoyalBlue;
            color:#ffffff;
        }
    </style>
    <div class="loginbox">
        <img src="assets/images/loginimage.png" class="loginimage">
        <h1> Login here </h1>
        <form method="post" action="login.php">
            <?php include('error.php'); ?>
            <p> Username </p>
            <input type="text" name="username" >
            <p>Password</p>
            <input type="password" name="password"><br>
            <button type="submit" class="btn" name="login_user">Login</button><br><br><br>
            <p>
            Not yet a member? <a href="register.php">Sign up</a>
            </p><br>
        </form>
    </div>
  </body>
  </html>