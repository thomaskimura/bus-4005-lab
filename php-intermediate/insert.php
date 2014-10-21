<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- INSERT DATA -->

<!--
Basic sytax for inserting data into
a table. The column names are optional:

INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
-->

<?php
	$con=mysqli_connect("localhost","root","root","test");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Thomas', 'Kimura',21)");

	mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Barack', 'Obama',33)");

	mysqli_close($con);
?>

<!-- Form is sent to insert_form.php -->
<html>
	<body>

		<form action="insert_form.php" method="post">
			Firstname: <input type="text" name="firstname">
			 Lastname: <input type="text" name="lastname">
						Age: <input type="text" name="age">
			<input type="submit">
		</form>

	</body>
</html>
