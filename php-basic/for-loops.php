<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--FOR LOOPS-->
<!DOCTYPE html>
<html>
<body>

<!--for loop-->
<?php
  // The for loop is used when you know in
  // advance how many times the script
  // should run.
  //
  // for (init counter; test counter; increment counter) {
  //   code to be executed;}
  //

  for ($x=0; $x<=10; $x++) {
    echo "The number is: $x <br>";}
?>

<!--for each loop-->
<?php
  // The foreach loop works only on arrays,
  // and is used to loop through each
  // key/value pair in an array.
  //
  // foreach ($array as $value) {
  //   code to be executed;}
  //

$colors = array("red","green","blue","yellow");

foreach ($colors as $value) {
  echo "$value <br>";}
?>

</body>
</html>
