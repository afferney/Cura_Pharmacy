<?php
  ob_start();
?>

    <td><p align="center"><img border="0" src="public/images/medicines.jpg" width="1000" height="700"></td>

<?php
    $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Home";
  $master_link="";

  include("layout/master.php");
?>
