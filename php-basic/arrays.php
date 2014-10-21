<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--ARRAYS-->
<!DOCTYPE html>
<html>
<body>

<?php
  $cars=array("Volvo","BMW","Toyota");
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "<br>";

  // assign index manualy
  // $cars[0]="Volvo";
  // $cars[1]="BMW";
  // $cars[2]="Toyota";

  echo count($cars); // get length of array
  echo "<br>";

  $arrlength = count($cars);

  for($x=0;$x<$arrlength;$x++) {
    echo $cars[$x];
    echo "<br>";}

  // create associative arrays two ways
  // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  // $age['Peter']="35";
  // $age['Ben']="37";
  // $age['Joe']="43";

  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  echo "Peter is " . $age['Peter'] . " years old.";
  echo "<br>";

  foreach($age as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";}
?>

</body>
</html>
