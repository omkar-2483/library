<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
        <div class="reg_img">
          <div class="box2">
            <h1 style="text-align: center; font-size:35px;">User Registration Form</h1>
            <form name="registration" action="" method="post">
              <div class="login">
                <input type="text" name="firstname" placeholder="Enter First Name" required=""><br><br>
                <input type="text" name="lastname" placeholder="Enter Last Name" required=""><br><br>
                <input type="text" name="username" placeholder="Enter Username" required=""><br><br>
                <input type="password" name="password" placeholder="Enter Password" required=""><br><br>
                <input type="text" name="email" placeholder="Enter Email Adress" required=""><br><br>
                <input type="text" name="contact" placeholder="Enter Mobile Number" required=""><br><br>
                <button style="color:white; font-size: 18px; font-weight: bold;" type="submit" name="submit">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <?php

         if(isset($_POST['submit']))
         { 
           $count=0;
           $sql="SELECT username FROM `admin`";
           $res=mysqli_query($db,$sql);

           while($row=mysqli_fetch_assoc($res))
           {
             if($row['username']==$_POST['username'])
             {
               $count=$count+1;
             }
           }

           if($count==0)
           {
             mysqli_query($db,"INSERT INTO `ADMIN` VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')");
      ?>
             <script type="text/javascript">
               alert("Registration successful");
             </script>
           
      <?php
            }
            else
            {
      ?>
             <script type="text/javascript">
               alert("The username already exits. Use another username");
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