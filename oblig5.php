<?php 
// Jahn-Eirik Husabø | 09.02.2020 | IBE 102: Oblig 5

$v2 = array (
    "BTC" => Array ("ticker" => "BTC", "navn" => "Bitcoin", "k1" => 1, "k2" => 11, "k3" => 17),
    "ETH" => Array ("ticker" => "ETH", "navn" => "Ethereum", "k1" => 0.1, "k2" => 0.11, "k3" => 0.17),
    "LTC" => Array ("ticker" => "LTC", "navn" => "Litecoin", "k1" => -1, "k2" => -11, "k3" => -17),
    "XMR" => Array ("ticker" => "XMR", "navn" => "Monero", "k1" => 1, "k2" => 2, "k3" => 3),
    "XRP" => Array ("ticker" => "XRP", "navn" => "Ripple", "k1" => 27, "k2" => 69, "k3" => -420),
);

echo "<!DOCTYPE html>
<html>
<head>
</head>
<body>";
if ( !isset($_GET['knapp']) ) {
    echo "\n<form action=''>\n\t<select name='flervalg'>";
    foreach ($v2 as $v) { // lager et valg for hver array i $v2
        // option value settes til ticker og k3 separert med komma
        echo "\n\t\t<option value=$v[ticker];$v[k3]>$v[ticker] $v[navn]</option>";
    };
    echo "\n\t</select>\n\t<input type='submit' name='knapp' value='Vis enkeltvaluta'>\n</form>\n";
} else { 
    $a = $_GET['flervalg'];
    $a = explode(";", $a); // separert med semikolon
    echo "Sist kjente kurs for $a[0]: $a[1]"; // printer med index i arrayen
};

echo "</body>
</html>";
?>