<!--–––––––––––––-->
<!--–––––––––––––-->
<!--THOMAS KIMURA-->
<!--––820545390––-->
<!--–––––––––––––-->
<!--–––––––––––––-->

<!-- CONNECT TO THE MYSQL SERVER -->

<!--
Basic syntax to open connection to MySQL server
mysqli_connect(host,username,password,dbname);

    host: Optional. Either a host name or an IP address
username:	Optional. The MySQL user name
password:	Optional. The password to log in with
  dbname:	Optional. The default database to be used when performing queries

    host: "localhost"
username: "root"
password: "root"
  dbname: "test"
-->

<?php
  // Create connection
  $con=mysqli_connect("localhost","root","root","test");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // Close database
  mysqli_close($con);
?>
