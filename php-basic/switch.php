<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--SWITCH-->
<!DOCTYPE html>
<html>
<body>

<?php
  // Use the switch statement to select one of
  // many blocks of code to be executed.
  //
  // switch (n) {
  //   case label1:
  //     code to be executed if n=label1;
  //     break;
  //   case label2:
  //     code to be executed if n=label2;
  //     break;
  //   case label3:
  //     code to be executed if n=label3;
  //     break;
  //   ...
  //   default:
  //     code to be executed if n is different from all labels;}
  //

  $favcolor="na";

  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, or green!";}
?>

</body>
</html>
