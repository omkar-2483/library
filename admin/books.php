<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Books</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body {
     background-image: url(images/books_img.png);
     background-size: cover;
     background-position: center;
    }
  </style>
</head>
<body >

  <!------------------search bar--------------------- -->
  <div class="srch">
    <form class="navbar-form" method="post" name="form1">
      <div>
        <input style="color:black; margin: 0;" type="text" name="search" placeholder="search book.." required="">
        <button style="width: 50px;" type="submit" name="submit">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div>
    </form>
  </div>

  <h2 style="background-color: #ffa400; margin: 0px; font-family: poppins; text-align: center; font-weight: bold;">List Of Books</h2>
  <?php

     if(isset($_POST['submit']))
     {
        $q=mysqli_query($db,"SELECT * FROM books WHERE name LIKE '%$_POST[search]%' ");
        if(mysqli_num_rows($q)==0)
        {
          echo "Sorry! NO book found. Try something again";
        }
        else
        {
          echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='color:black; background-color: #009ffd;'>";
             //Table header
             echo "<th>"; echo "ID"; echo "</th>";
             echo "<th>"; echo "Book-Name";  echo "</th>";
             echo "<th>"; echo "Authors Name";  echo "</th>";
             echo "<th>"; echo "Edition";  echo "</th>";
             echo "<th>"; echo "Status";  echo "</th>";
             echo "<th>"; echo "Quantity";  echo "</th>";
            echo "</tr>"; 

          while($row=mysqli_fetch_assoc($q))
          {
            echo "<tr style='background-color: #232528;'>";
             echo "<td>"; echo $row['bid']; echo "</td>";
             echo "<td>"; echo $row['name']; echo "</td>";
             echo "<td>"; echo $row['authors']; echo "</td>";
             echo "<td>"; echo $row['edition']; echo "</td>";
             echo "<td>"; echo $row['status']; echo "</td>";
             echo "<td>"; echo $row['quantity']; echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
      }
      else
      {
        $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table class='table table-bordered table-hover' >";
         echo "<tr style='color:black; background-color: #009ffd;'>";
          //Table header
          echo "<th>"; echo "ID"; echo "</th>";
          echo "<th>"; echo "Book-Name";  echo "</th>";
          echo "<th>"; echo "Authors Name";  echo "</th>";
          echo "<th>"; echo "Edition";  echo "</th>";
          echo "<th>"; echo "Status";  echo "</th>";
          echo "<th>"; echo "Quantity";  echo "</th>";
         echo "</tr>"; 

        while($row=mysqli_fetch_assoc($res))
        {
         echo "<tr style='background-color: #232528;'>";
          echo "<td>"; echo $row['bid']; echo "</td>";
          echo "<td>"; echo $row['name']; echo "</td>";
          echo "<td>"; echo $row['authors']; echo "</td>";
          echo "<td>"; echo $row['edition']; echo "</td>";
          echo "<td>"; echo $row['status']; echo "</td>";
          echo "<td>"; echo $row['quantity']; echo "</td>";
         echo "</tr>";
        }
        echo "</table>";
      }
 
  ?>
</body>
</html>