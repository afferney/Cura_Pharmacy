<?php
  ob_start();
?>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

<?php
  $host = "localhost";
  $user = "root";
  $pass = "";

  $db = "cura_pharmacy";
  $conn = mysqli_connect($host,$user,$pass,$db); 

  if($conn == false){
    die("Database is not connected");
  }
  else{
    echo("Database is connected");
  }
  ?>

<?php

  $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Home";
  $master_link="";

  include("layout/master.php");
?>
