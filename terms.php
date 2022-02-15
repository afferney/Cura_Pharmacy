<?php
  ob_start();
?>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

  <h2>Terms & Conditions</h2>
    <br>
    <font align="left" face="verdana" size="4">
    <b>1. Applicability</b>
    <p>1.1 The General Terms and Conditions below apply to all offers and transactions of Cura Pharmacy. Prices are subject to change.<br>
    1.2 By accepting an offer or making an order, the consumer expressly accepts the applicability of these General Terms and Conditions.<br>
    1.3 Deviations from that stipulated in these Terms and Conditions are only valid when they are confirmed in writing by the management.<br>
    1.4 All rights and entitlements stipulated for Cura Pharmacy in these General Terms and Conditions and any further agreements will also apply for intermediaries and other third parties deployed by Cura Pharmacy.</p>
    <b>2. Quality</b>
    <p>The restaurant guarantees that all the products offered meet the standards of the concept.<br>
    If there are any complaints the management needs to be informed immediately. Appropriate actions will be taken as soon as possible.</p>
    <b>3. Prices/offers</b>
    <p>3.1 All offers made by Cura Pharmacy are without obligation and Cura Pharmacy expressly reserves the right to change the prices, in particular if this is necessary as a result of statutory or other regulations.<br>
    3.1 All prices are indicated in euros, including VAT.<br>
    3.3 In certain cases, promotional prices apply. These prices are valid only during a specific period as long as stocks last. No entitlement to these prices may be invoked before or after the specific period.<br>
    3.4 Cura Pharmacy cannot be held to any price indications that are clearly incorrect, for example as a result of obvious typesetting or printing errors. No rights may be derived from incorrect price information.</p>
    <b>4. Cancellations</b>
    <p>4.1 Cura Pharmacy is entitled to cancel or change the date of an event. Should this happen, Cura Pharmacy will attempt to provide a suitable solution. If an event is cancelled or postponed, Cura Pharmacy will do its utmost to inform you as soon as possible. However, Cura Pharmacy cannot guarantee it is possible to inform you timely of any change or cancellation of an event or be held responsible for refunds, compensations or for any resulting costs you may incur, for example for travel,          accommodation and/or any other related goods or service.<br>
    4.2 Before confirming your reservation, always check carefully that you have reserved the correct (number of) persons. Wrongfully ordered (numbers of) persons are not refundable.<br>
    4.3. All purchases are final. The dinner cruise tickets bought here cannot be returned for any refunds whatsoever; group bookings paid for on the website likewise cannot be cancelled by the purchaser and refunds claimed for any reason whatsoever.</p>
    <b>5. Payments</b>
    <p>5.1 All prices are including VAT.<br>
    5.2 Methods of payment we accept: Cash, iDeal, Mr. Cash, Maestro, Visa, Mastercard and American Express.<br>
    5.3 You will not receive confirmation of your definitive booking until your payment has been approved.</p>
    <b>6. Other provisions</b>
    <p>6.1  If one or more of the provisions in these Terms and Conditions or any other agreement with Cura Pharmacy are in conflict with any applicable legal regulation, the provision in question will lapse and be replaced by a new comparable stipulation admissible by law to be determined by Cura Pharmacy.<br>
    6.2  The law of the Netherlands applies to all agreements entered into with or concluded by Cura Pharmacy. Any disputes arising directly or indirectly from these agreements will be exclusively settled by the Court of Amsterdam.</p>
  </font>

<?php
  $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Home";
  $master_link="";

  include("layout/master.php");
?>
