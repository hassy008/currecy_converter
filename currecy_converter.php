<?php
  function convertCurrency($from, $to, $amount){
  $url = file_get_contents('https://free.currencyconverterapi.com/api/v5/convert?q=' . $from . '_' . $to . '&compact=ultra');
  $json = json_decode($url, true);
  $rate = implode(" ",$json);
  $total = $rate * $amount;
  $rounded = round($total); //optional, rounds to a whole number
  return $total; //or return $rounded if you kept the rounding bit from above
}

echo $convertCurrency("BDT", "USD", $amount);
//  $dollar_amount=convertCurrency("BDT", "USD", $amount);

?>

