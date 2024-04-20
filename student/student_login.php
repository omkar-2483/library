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
