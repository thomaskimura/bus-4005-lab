<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--SUPERGLOBALS-->
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname2">
  <input type="submit">
</form>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<br>

<?php
  // The PHP superglobal variables are:
  // $GLOBALS
  // $_SERVER
  // $_REQUEST
  // $_POST
  // $_GET
  // $_FILES
  // $_ENV
  // $_COOKIE
  // $_SESSION

  // $GLOBALS
  // $GLOBALS is a PHP super global variable which is used
  // to access global variables from anywhere in the PHP
  // script (also from within functions or methods).
  $x = 75;
  $y = 25;

  function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; }

  addition();
  echo $z;
  echo "<br>";

  // $_SERVER
  // $_SERVER is a PHP super global variable which holds
  // information about headers, paths, and script
  // locations.
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['HTTP_HOST'];
  echo "<br>";
  echo $_SERVER['HTTP_REFERER'];
  echo "<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];
  echo "<br>";

  // $_REQUEST
  // PHP $_REQUEST is used to collect data after
  // submitting an HTML form.
  $name = $_REQUEST['fname'];
  echo $name;

  // $_POST
  // PHP $_POST is widely used to collect form
  // data after submitting an HTML form with
  // method="post". $_POST is also widely
  // used to pass variables.
  $name = $_POST['fname2'];
  echo $name;

  // $_GET
  // PHP $_GET can also be used to collect form
  // data after submitting an HTML form with
  // method="get".
  //
  // this code live in test_get.php
  // echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>
