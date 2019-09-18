<?php 

if (isset($_POST['ajax_name'])) {
  $oib = $_POST['ajax_name'];
  if (empty($oib)) {

    echo 'Insert some digits to check!';

  } elseif (!ctype_digit($oib)) {

    echo 'Oib may contains only numbers';

  } elseif (strlen($oib) < 11) {

    echo "OIB is exactly 11 digits, " . "you inserted only " . strlen($oib);

  } elseif (strlen($oib) > 11) {

    echo 'Inserted OIB is bigger thet 11 digits';

  } elseif (strlen($oib) == 11) {

    echo 'OIB je correct';
  }

}


?>