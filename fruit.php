<?php
function getValue($amount, $value) {
    return $amount * $value;
}

$apple = rand(0, 30);
$orange = rand(0, 30);
$kiwi = rand(0, 30);

$appleValue = getValue($apple, 0.90); 
$orangeValue = getValue($orange, 1,10);
$kiwiValue = getValue($kiwi, 0.25);
$totalValue = $appleValue + $orangeValue + $kiwiValue;

if($totalValue < 10 ) {
    echo PHP_EOL."Petit panier: ".$totalValue.PHP_EOL;
}
if(($totalValue >= 10) && ($totalValue < 15 )) {
    echo PHP_EOL."Moyen panier: ".$totalValue.PHP_EOL;
}
if(($totalValue >= 20) && ($totalValue < 30 )) {
    echo PHP_EOL."Grand panier: ".$totalValue.PHP_EOL;
}










