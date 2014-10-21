<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- ORDER DATA -->

<!--
Basic syntax for ordering data:

SELECT column_name(s)
FROM table_name
ORDER BY column_name(s) ASC|DESC
-->

<?php
	$con=mysqli_connect("localhost","root","root","test");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM Persons ORDER BY age");

	while($row = mysqli_fetch_array($result)) {
	  echo $row['FirstName'];
	  echo " " . $row['LastName'];
	  echo " " . $row['Age'];
	  echo "<br>";
	}

	mysqli_close($con);
?>
