<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP OPERATORS-->
<!DOCTYPE html>
<html>
<body>

<!--math operators-->
<?php
	$x=10;
	$y=6;
	echo ($x + $y); // outputs 16
	echo "<br>";
	echo ($x - $y); // outputs 4
	echo "<br>";
	echo ($x * $y); // outputs 60
	echo "<br>";
	echo ($x / $y); // outputs 1.6666666666667
	echo "<br>";
	echo ($x % $y); // outputs 4
	echo "<br>";
?>

<!--assignment operators-->
<?php
	$x=10;
	echo $x; // outputs 10
	echo "<br>";

	$y=20;
	$y += 100;
	echo $y; // outputs 120
	echo "<br>";

	$z=50;
	$z -= 25;
	echo $z; // outputs 25
	echo "<br>";

	$i=5;
	$i *= 6;
	echo $i; // outputs 30
	echo "<br>";

	$j=10;
	$j /= 5;
	echo $j; // outputs 2
	echo "<br>";

	$k=15;
	$k %= 4;
	echo $k; // outputs 3
	echo "<br>";
?>

<!--string operators-->
<?php
	$a = "Hello";
	$b = $a . " world! <br>";
	echo $b; // outputs Hello world!

	$x="Hello";
	$x .= " world! <br>";
	echo $x; // outputs Hello world!
?>

<!--increment/decrement operators-->
<?php
	$x=10;
	echo ++$x; // outputs 11
	echo "<br>";

	$y=10;
	echo $y++; // outputs 10
	echo "<br>";

	$z=5;
	echo --$z; // outputs 4
	echo "<br>";

	$i=5;
	echo $i--; // outputs 5
	echo "<br>";
?>

<!--comparison operators-->
<?php
	$x=100;
	$y="100";

	var_dump($x == $y);
	echo "<br>";

	var_dump($x === $y);
	echo "<br>";

	var_dump($x != $y);
	echo "<br>";

	var_dump($x !== $y);
	echo "<br>";

	$a=50;
	$b=90;

	var_dump($a > $b);
	echo "<br>";

	var_dump($a < $b);
	echo "<br>";
?>

<!--array operators-->
<?php
	$x = array("a" => "red", "b" => "green");
	$y = array("c" => "blue", "d" => "yellow");
	$z = $x + $y; // union of $x and $y
	var_dump($z);
	echo "<br>";

	var_dump($x == $y);
	echo "<br>";

	var_dump($x === $y);
	echo "<br>";

	var_dump($x != $y);
	echo "<br>";

	var_dump($x <> $y);
	echo "<br>";

	var_dump($x !== $y);
	echo "<br>";
?>

</body>
</html>
