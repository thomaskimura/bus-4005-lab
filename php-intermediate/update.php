<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- UPDATE DATA -->

<!--
Basic syntax for updating data:

UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value
-->


<?php
	$con=mysqli_connect("localhost","root","root","test");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Update Thomas Kimura
	mysqli_query($con,"UPDATE Persons SET Age=36
	WHERE FirstName='Thomas' AND LastName='Kimura'");

	mysqli_close($con);
?>
