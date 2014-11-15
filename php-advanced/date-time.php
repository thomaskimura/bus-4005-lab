<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--DATE & TIME-->
<!DOCTYPE html>
<html>
<body>

<?php

// The PHP date() function formats a timestamp to a more readable date and time.
// date(format,timestamp)

// Some formats for displaying dates
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") 		 . "<br>";

// Display time
echo "The time is " . date("h:i:sa"). "<br>";

// Get time zone
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). "<br>";

?>

<!-- Automatically update copywrite -->
&copy; 2010-<?php echo date("Y")?>

</body>
</html>
