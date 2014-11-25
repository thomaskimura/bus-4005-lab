<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--FILTERS-->
<?php
	$int = 123;

	if(!filter_var($int, FILTER_VALIDATE_INT)) {
		echo("Integer is not valid");
	} else {
		echo("Integer is valid");
	}
?>

<?php
	$var=300;

	$int_options = array(
		"options"=>array
		(
		"min_range"=>0,
		"max_range"=>256
	)
	);

	if(!filter_var($var, FILTER_VALIDATE_INT, $int_options)) {
		echo("Integer is not valid");
	} else {
		echo("Integer is valid");
	}
?>

<?php
	if(!filter_has_var(INPUT_GET, "email")) {
		echo("Input type does not exist");
	} else {
		if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
			echo "E-Mail is not valid";
		} else {
			echo "E-Mail is valid";
		}
	}
?>

<?php
	if(!filter_has_var(INPUT_POST, "url")) {
		echo("Input type does not exist");
	} else {
		$url = filter_input(INPUT_POST,
		"url", FILTER_SANITIZE_URL);
	}
?>

<?php
	$filters = array
	(
	"name" => array
	(
	"filter"=>FILTER_SANITIZE_STRING
	),
	"age" => array
	(
	"filter"=>FILTER_VALIDATE_INT,
	"options"=>array
	(
	"min_range"=>1,
	"max_range"=>120
	)
	),
	"email"=> FILTER_VALIDATE_EMAIL
	);

	$result = filter_input_array(INPUT_GET, $filters);

	if (!$result["age"]) {
		echo("Age must be a number between 1 and 120.<br>");
	} elseif(!$result["email"]) {
		echo("E-Mail is not valid.<br>");
	} else {
		echo("User input is valid");
	}
?>

<?php
	function convertSpace($string) {
		return str_replace("_", " ", $string);
	}

	$string = "Peter_is_a_great_guy!";

	echo filter_var($string, FILTER_CALLBACK,
	array("options"=>"convertSpace"));
?>
