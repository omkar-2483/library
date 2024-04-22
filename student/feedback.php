<?php
  include "navbar.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback</title>
<link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
     body{
      background-image: url("images/feed_img.jpg");
      background-size: cover;
      background-position: center;
    }
    .wrapper{
      width: 900px;
      height: 700px;
      background-color: black;
      opacity: .8;
      color: white;
      padding: 10px;
      margin:20px auto ;
      border: 3px solid white;
      border-radius: 10px;
      text-align: center;
    }
    input{
      color:white ;
      background-color: #3C5B6F;
      height: 100px;
      width: 800px; 
      font-size: 20px;
    }
    .scroll{
      width: 100%;
      height: 350px;
      overflow: auto;
    }

  </style>
</head>
<body>
  <div class="wrapper">
    <h3>If you have any suggesions or questions please comment below</h3>
    <br><br>
    <form action="" method="post">
       <input type="text" name="comment" placeholder="Write something...">
       <br><br>
       <button type="submit" name="submit" value="Comment">Comment</button>
    </form>

    <br><br>
    <div class="scroll">
    <?php
       if(isset($_POST['submit']))
       {
         $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
         if(mysqli_query($db,$sql))
         {
           ?>
           <h3>All Comments</h3>
           <?php
           $q="SELECT * FROM `comments` ORDER BY `id` DESC";
           $res=mysqli_query($db,$q);

           echo "<table class='table table-bordered'>";
           while($row=mysqli_fetch_assoc($res))
           {
             echo "<tr>";
                 echo "<td>"; echo $row['comment']; echo "</td>";
             echo "</tr>";
           }
         }
       }
    ?>
  </div>
  </div>

</body>
</html>