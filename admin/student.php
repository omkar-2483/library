<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
     background-image: url(images/std_img.jpg);
     background-size: cover;
     background-position: center;
  	}
  </style>
</head>

<body>
	<!--__________________________search bar________________________-->

	<div>
		<form class="navbar-form" method="post" name="form1">
				<input style="color:black; margin: 0;" type="text" name="search" placeholder="Student username.." required="">
				<button style="width: 50px;" type="submit" name="submit">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
	</div>

	<h2 style="margin: 0px; font-family: poppins; text-align: center; font-weight: bold; color: wheat;">List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT firstname,lastname,username,prn,email,contact FROM `student` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "PRN";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['firstname']; echo "</td>";
				echo "<td>"; echo $row['lastname']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['prn']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT firstname,lastname,username,prn,email,contact FROM `student`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "PRN";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['firstname']; echo "</td>";
				echo "<td>"; echo $row['lastname']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['prn']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>