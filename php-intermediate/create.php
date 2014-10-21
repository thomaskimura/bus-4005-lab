<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- CREATE TABLE -->

<?php
	$con=mysqli_connect("localhost","root","root","test");
	
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Create table
	$sql="CREATE TABLE Persons(FirstName CHAR(30),
				LastName CHAR(30),
				Age INT)";

	// Add below to $sql a primary key
	// and auto increment:
	//
	// PID INT NOT NULL AUTO_INCREMENT
	// PRIMARY KEY(PID)

	// Execute query
	if (mysqli_query($con,$sql)) {
	  echo "Table persons created successfully";
	} else {
	  echo "Error creating table: " . mysqli_error($con);
	}
?>
