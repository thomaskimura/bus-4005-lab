<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP CONSTANTS-->
<!DOCTYPE html>
<html>
<body>

<!--define()-->
<?php
// The first parameter defines the name of the
// constant, the second parameter defines the
// value of the constant, and the optional
// third parameter specifies whether the
// constant name should be case-insensitive.
define("GREETING", "Welcome to W3Schools.com! <br>");
echo GREETING;
?>

<?php
define("GREETING", "Welcome to W3Schools.com! <br>", true); // set to case insensitive
echo greeting;
?>

</body>
</html>
