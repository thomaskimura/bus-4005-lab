<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!--FUNCTIONS-->
<!DOCTYPE html>
<html>
<body>

<?php
  // A user defined function declaration
  // starts with the word "function":
  //
  // function functionName() {
  //   code to be executed;}
  //

  function writeMsg() {
    echo "Hello world!<br>";}

  writeMsg(); // call the function

  function familyName($fname) {   // pass in arguments
    echo "Hello, $fname Refsnes.<br>";}

  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

  function familyNameYear($fname,$year) {
    echo "$fname Refsnes. Born in $year <br>";}

  familyNameYear("Hege","1975");
  familyNameYear("Stale","1978");
  familyNameYear("Kai Jim","1983");

  function setHeight($minheight=50) {
    echo "The height is : $minheight <br>";}

  setHeight(350);
  setHeight();    // will use the default value of 50
  setHeight(135);
  setHeight(80);

  function sum($x,$y) {
    $z=$x+$y;
    return $z; }    // use return to get value

  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>
