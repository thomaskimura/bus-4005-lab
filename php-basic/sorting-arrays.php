<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--SORTING ARRAYS-->
<!DOCTYPE html>
<html>
<body>

<?php
  // ascending alphabetical order
  $cars = array("Volvo","BMW","Toyota");
  sort($cars);

  // ascending numerical order
  $numbers=array(4,6,2,22,11);
  sort($numbers);

  // descending alphabetical order
  $cars=array("Volvo","BMW","Toyota");
  rsort($cars);

  // descending numerical order
  $numbers=array(4,6,2,22,11);
  rsort($numbers);

  // in ascending order, according to the value
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  asort($age);

  // in ascending order, according to the key
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  ksort($age);

  // in descending order, according to the value
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  arsort($age);

  // in descending order, according to the key
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  krsort($age);
?>

</body>
</html>
