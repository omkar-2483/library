<?php
  include "connection.php";
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
          <form action="" method="post" name="login">
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
              <button type="submit" name="submit" style="color:white; font-size: 18px; font-weight: bold">Login</button>

              <br/>
              <div class="alert alert-danger" style="width:400px; background-color: #de1313; color: white; display: none; padding: 5px 5px 5px 5px;">
                <strong">The username and password doesn't match</strong>
              </div>

            </div>
            <p style="color: white; padding-left: 15px; font-size: 20px">
              <br />
              <a style="color: white;" href="">Forgot Password?</a>
              &nbsp; &nbsp; &nbsp; New to this website?
              <a href="registration.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </section>

      <?php
         if(isset($_POST['submit']))
         {
           $count=0;
           $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' AND password='$_POST[password]';");
           $count=mysqli_num_rows($res);

           if($count==0)
           {
             ?>
             <script type="text/javascript">
               document.querySelector(".alert").style.display='block';
             </script>

             <?php
           }
           else
           {
             $_SESSION['login_user'] = $_POST['username'];
             ?>
             <script type="text/javascript">
               window.location="index.php";
             </script>
             <?php
           }
         }
      ?>
    <?php
      include "footer.php";
    ?>

  </body>
</html>
