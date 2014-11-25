<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--COOKIES-->
<?php
	// set cookie
	$cookie_name = "user";
	$cookie_value = "John Doe";

	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	// 86400 = 1 day
?>

<?php
	// delete cookie
	// $cookie_name = "user";
	// unset($_COOKIE[$cookie_name]);
	// empty value and expiration one hour before
	// $res = setcookie($cookie_name, '', time() - 3600);
?>

<?php
	setcookie("test_cookie", "test", time() + 3600, '/');
?>

<?php
	echo "Cookie is set.<br>";
?>

<?php
	// check cookie
	$cookie_name = "user";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' does not exist!";
	} else {
		echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
	}
?>

<?php
	// edit cookie
	$cookie_name = "user";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' does not exist!";
	} else {
		echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
	}
?>

<?php
	// are cookies enabled
	if(count($_COOKIE) > 0) {
		echo "Cookies are enabled";
	} else {
		echo "Cookies are disabled";
	}
?>

</body>
</html>
