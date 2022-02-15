<?php
  ob_start();
?>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

<?php
    $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Home";
  $master_link="";

  include("layout/master.php");
?>
