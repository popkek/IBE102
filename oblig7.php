<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';

$v2 = array ( // array med valutakurser
    "BTC" => Array ("ticker" => "BTC", "navn" => "Bitcoin", "k1" => 1, "k2" => 11, "k3" => 17),
    "ETH" => Array ("ticker" => "ETH", "navn" => "Ethereum", "k1" => 0.1, "k2" => 0.11, "k3" => 0.17),
    "LTC" => Array ("ticker" => "LTC", "navn" => "Litecoin", "k1" => -1, "k2" => -11, "k3" => -17),
    "XMR" => Array ("ticker" => "XMR", "navn" => "Monero", "k1" => 1, "k2" => 2, "k3" => 3),
    "XRP" => Array ("ticker" => "XRP", "navn" => "Ripple", "k1" => 27, "k2" => 69, "k3" => -420),
);

function find($a, $b) {
    if (is_int(strpos($a, $b))) {
        return(TRUE);
    } else {
        return(FALSE);
    }
}

if ( isset($_GET['find']) ) { //resultat
    $find = isset($_GET['submit']) ? strtolower((string)$_GET['find']) : ""; // kjører case-insensitivt søk uansett
    // velger å ikke printe med $find da $find vil gi lowercase uansett. her vil jeg printe søketeksten slik brukeren skriver det
    echo "<p>treff for '". (string)$_GET['find'] ."': </p>"; 
    foreach ($v2 as $v) {
        $haystack = strtolower($v['ticker']);
        if (find($haystack, $find) == TRUE) {
            echo "<p>siste kjente kurs for ". $v['ticker'] ."(".$v['navn']."): ".$v['k3'] ."</p>";
        } else { // denne delen kjører kun dersom den ikke finner treff på ticker
            if(find($v['navn'], $find) == TRUE) {
                echo "<p>siste kjente kurs for ". $v['ticker'] ."(".$v['navn']."): ".$v['k3'] ."</p>";
            }
        }
    }
} else {
    //html skjema
    echo("<form action=''>
    <input type='text' name='find'>
    <input type='submit' value='Søk' name='submit'>
</form>");
}

echo "</body>
</html>";
?>

