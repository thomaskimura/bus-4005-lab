<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--INCLUDE-->
<!DOCTYPE html>
<html>
<body>

<div class="menu">
	<?php include 'include/menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'include/footer.php';?>

<?php
	include 'include/vars.php';
	echo "I have a $color $car.";
?>
</br>

<?php
	include 'noFileExists.php';
	echo "I have a $color $car.";
?>
</br>

<?php
	require 'noFileExists.php';
	echo "I have a $color $car.";
?>
</br>

</body>
</html>
