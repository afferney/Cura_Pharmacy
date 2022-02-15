<?php
  ob_start();
?>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

  <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 100px">
    <iframe src="https://maps.google.com/maps?q=deltastraat&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="100"
      style="border:0" allowfullscreen></iframe>
  </div>
  <br>

  <font align="left" face="verdana" size="4">
	  <p><b>Visit us at:</b>Deltastraat #38<br>
	  Muizenberg<br>
	  Curacao<br>
		<b>Email:</b><a href="mailto:jon.afferney.com">Jon Saridjan</a><br>
	  <b>Tel:</b>+(5999)5225104</p>
  </font>

<?php
  $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Contact us";
  $master_link="";

  include("layout/master.php");
?>
