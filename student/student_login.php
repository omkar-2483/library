<?php
  include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      section{
        margin-top:-20px;
      }
    </style>
  </head>

  <body>
<!--     <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand active">Book House</h1>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
          <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
          <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
        </ul>
      </div>
    </nav> -->
    <section>
      <div class="log_img">
        <div class="box1">
          <h1 style="text-align: center; font-size: 35px">User Login Form</h1>
          <br /><br />
          <form action="" method="" name="login">
            <div class="login">
              <input
                type="text"
                name="username"
                placeholder="Enter Username"
                required=""
              /><br /><br />
              <input
                type="password"
                name="password"
                placeholder="Enter Password"
                required=""
              /><br /><br />
              <button style="font-size: 18px; font-weight: bold">Login</button>
            </div>
            <p style="color: white; padding-left: 15px; font-size: 20px">
              <br /><br />
              <a style="color: white" href="">Forgot Password?</a>
              &nbsp; &nbsp; &nbsp; New to this website?
              <a href="registration.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
