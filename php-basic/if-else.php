<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--PHP IF/ELSE-->
<!DOCTYPE html>
<html>
<body>

<!--if-->
<?php
  // if (condition) {
  //  code to be executed if condition is true;
  // }
  $t=date("H");

  if ($t<"20") {
    echo "Have a good day! <br>";
  }
?>

<!--if/else-->
<?php
  // if (condition) {
  //   code to be executed if condition is true;
  // } else {
  //   code to be executed if condition is false;
  // }
  $t=date("H");

  if ($t<"20") {
    echo "Have a good day! <br>";
  } else {
    echo "Have a good night! <br>";
  }
?>

<!--if/else/elseif-->
<?php
  // if (condition) {
  //   code to be executed if condition is true;
  // } elseif (condition) {
  //   code to be executed if condition is true;
  // } else {
  //   code to be executed if condition is false;
  // }
  $t=date("H");

  if ($t<"10") {
    echo "Have a good morning! <br>";
  } elseif ($t<"20") {
    echo "Have a good day! <br>";
  } else {
    echo "Have a good night! <br>";
  }
?>

</body>
</html>
