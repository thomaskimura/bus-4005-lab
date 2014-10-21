<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--WHILE LOOP-->
<!DOCTYPE html>
<html>
<body>

<!--while loop-->
<?php
// The while loop executes a block of code
// as long as the specified condition is
// true.
//
// while (condition is true) {
//   code to be executed;}
//

  $x=1;

  while($x<=5) {
    echo "The number is: $x <br>";
    $x++;}
?>

<!--do while loop-->
<?php
  // The while loop executes a block of code
  // as long as the specified condition is
  // true.
  //
  // while (condition is true) {
  //   code to be executed;}
  //
  $x=1;

  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x<=5);

  $x=6;

  do {
    echo "The number is: $x <br>"; // executed before checking statement
    $x++;
  } while ($x<=5);
?>

</body>
</html>
