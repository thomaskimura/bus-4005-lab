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
	// Echo session variables that were set on previous page
	echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
	echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<?php
	print_r($_SESSION);
?>

<?php
	// to change a session variable, just overwrite it
	$_SESSION["favcolor"] = "yellow";
	print_r($_SESSION);
?>

<?php
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();
?>

</body>
</html>
