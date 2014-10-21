<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP VARIABLES-->
<!DOCTYPE html>
<html>
<body>

<?php
  $x=5;
  $y=6;
  $z=$x+$y;
  echo $z;
?>

<?php
  $txt="Hello world!";  // string
  $x=5;                 // interger
  $y=10.5;              // float
?>

<!--global vairables-->
<?php
  $x=5; // global scope

  function myTest() {
    $y=10; // local scope
    echo "<p>Test variables inside the function:</p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y";
  }

  myTest();

  echo "<p>Test variables outside the function:</p>";
  echo "Variable x is: $x";
  echo "<br>";
  echo "Variable y is: $y<br>";
?>

<!--global keywords-->
<?php
  $x=5;
  $y=10;

  function myTest2() { // can't reuse myTest function
    global $x,$y;
    $y=$x+$y;
  }

  myTest2();
  echo "$y <br>"; // outputs 15
?>

<!--gloabl variables stored in array-->
<?php
  $x=5;
  $y=10;

  function myTest3() {
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
  }

  myTest3();
  echo "$y <br>"; // outputs 15
?>

<!--static keyword-->
<!--keep variable alive-->
<?php
  function myTest4() {
    static $x=0;
    echo "$x <br>";
    $x++;
  }

  myTest4();
  myTest4();
  myTest4();
?>

</body>
</html>
