<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--FILE OPEN/READ-->
<!DOCTYPE html>
<html>
<body>

<?php
	$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("files/webdictionary.txt"));
	fclose($myfile);
?>
</br>
</br>

<?php
	// Read single line
	$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
	echo fgets($myfile);
	fclose($myfile);
?>
</br>
</br>

<?php
	// Line by line
	$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
	// Output one line until end-of-file
	while(!feof($myfile)) {
	  echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
?>

<?php
	$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
	// Output one character until end-of-file
	while(!feof($myfile)) {
	  echo fgetc($myfile);
	}
	fclose($myfile);
?>

</body>
</html>
