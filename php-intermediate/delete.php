<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- DELETE DATA -->

<!--
Basic syntax for deleting data:

DELETE FROM table_name
WHERE some_column = some_value
-->

<?php
	$con=mysqli_connect("localhost","root","root","test");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Delete "Kimura"
	mysqli_query($con,"DELETE FROM Persons WHERE LastName='Kimura'");

	mysqli_close($con);
?>
