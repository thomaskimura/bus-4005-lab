<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- WHERE -->

<!--
Basic syntax for WHERE selection:

SELECT column_name(s)
FROM table_name
WHERE column_name operator value
-->

<?php
	$con=mysqli_connect("localhost","root","root","test");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Select Thomas
	$result = mysqli_query($con,"SELECT * FROM Persons
	WHERE FirstName='Thomas'");

	while($row = mysqli_fetch_array($result)) {
	  echo $row['FirstName'] . " " . $row['LastName'];
	  echo "<br>";
	}
?>
