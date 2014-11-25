<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--SESSION-->
<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
	// Set session variables
	$_SESSION["favcolor"] = "green";
	$_SESSION["favanimal"] = "cat";
	echo "Session variables are set.";
?>

</body>
</html>
