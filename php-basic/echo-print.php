<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP ECHO/PRINT-->
<!DOCTYPE html>
<html>
<body>

<!--echo-->
<?php
	echo "<h2>PHP is fun!</h2>";
	echo "Hello world!<br>";
	echo "I'm about to learn PHP!<br>";
	echo "This", " string", " was", " made", " with multiple parameters.";
?>

<?php
	// use variables in echo
	$txt1="Learn PHP";
	$txt2="W3Schools.com";
	$cars=array("Volvo","BMW","Toyota");

	echo $txt1;
	echo "<br>";
	echo "Study PHP at $txt2";
	echo "My car is a {$cars[0]}";
?>

<!--print-->
<?php
	print "<h2>PHP is fun!</h2>";
	print "Hello world!<br>";
	print "I'm about to learn PHP!";
?>

<?php
	// use variables in print
	$txt1="Learn PHP";
	$txt2="W3Schools.com";
	$cars=array("Volvo","BMW","Toyota");

	print $txt1;
	print "<br>";
	print "Study PHP at $txt2";
	print "My car is a {$cars[0]}";
?>

</body>
</html>
