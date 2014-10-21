<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP DATA TYPES-->
<!DOCTYPE html>
<html>
<body>

<!--strings-->
<?php
  $x = "Hello world!";
  echo $x;
  echo "<br>";
  $x = 'Hello world! <br>';
  echo $x;
?>

<!--integers-->
<?php
  $x = 5985;
  var_dump($x);
  echo "<br>";
  $x = -345;    // negative number
  var_dump($x);
  echo "<br>";
  $x = 0x8C;    // hexadecimal number
  var_dump($x);
  echo "<br>";
  $x = 047;     // octal number
  var_dump($x);
  echo "<br>";
?>

<!--float-->
<?php
  $x = 10.365;
  var_dump($x);
  echo "<br>";
  $x = 2.4e3;
  var_dump($x);
  echo "<br>";
  $x = 8E-5;
  var_dump($x);
?>

<!--booleans-->
<?php
  $x=true;
  $y=false;
?>

<!--arrays-->
<?php
  $cars=array("Volvo","BMW","Toyota");
  var_dump($cars);
  echo "<br>";
?>

<!--objects-->
<?php
  class Car
  {
    var $color;
    function Car($color="green") {
      $this->color = $color;
    }
    function what_color() {
      return $this->color;
    }
  }
?>

<!--null-->
<?php
  $x="Hello world!";
  $x=null;
  var_dump($x);
?>

</body>
</html>
