<?php 
// Jahn-Eirik Husabø | 26.01.2020 | IBE 102: Oblig 4
// beklager for at koden er litt rotete, jeg skal ta eksamen i morgen :)

$ticker = array ("BTC", "ETH", "LTC", "XMR", "XRP");
$navn = array ("Bitcoin", "Ethereum", "Litecoin", "Monero", "Ripple");
$k1 = array (1, 2, 3, 4, 5);
$k2 = array (6, 7, 8, 9, 10);
$k3 = array (11, 12, 13, 14, 15);


// v
$v = array (
);

$i = 0;
while ($i < count($ticker))  {
    $v[$ticker[$i]] = array();
    $v[$ticker[$i]][] = $navn[$i];
    $v[$ticker[$i]][] = $k1[$i];
    $v[$ticker[$i]][] = $k2[$i];
    $v[$ticker[$i]][] = $k3[$i];
    $i++;
};

// v2
// jeg laget ekstra del i array for ticker pga jeg fikk NOTICE Array to string conversion on line number 100
$v2 = array (
    "BTC" => Array ("ticker" => "BTC", "navn" => "Bitcoin", "k1" => 1, "k2" => 11, "k3" => 17),
    "ETH" => Array ("ticker" => "ETH", "navn" => "Ethereum", "k1" => 0.1, "k2" => 0.11, "k3" => 0.17),
    "LTC" => Array ("ticker" => "LTC", "navn" => "Litecoin", "k1" => -1, "k2" => -11, "k3" => -17),
    "XMR" => Array ("ticker" => "XMR", "navn" => "Monero", "k1" => 1, "k2" => 2, "k3" => 3),
    "XRP" => Array ("ticker" => "XRP", "navn" => "Ripple", "k1" => 27, "k2" => 69, "k3" => -420),
);

$i = 0;
while ($i < count($ticker)) {
    $v[$ticker[$i]] = array();
    $v[$ticker[$i]]["navn"] = $navn[$i];
    $v[$ticker[$i]]["k1"] = $k1[$i];
    $v[$ticker[$i]]["k2"] = $k2[$i];
    $v[$ticker[$i]]["k3"] = $k3[$i];
    $i++;
};

// del 1
echo "<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n";
echo "<h1>del 1</h1>\n<pre>\n";
print_r ($ticker);
print_r ($navn);
print_r ($k1);
print_r ($k2);
print_r ($k3);
echo "</pre>\n";
$i = 0;
while ($i < count($ticker)) {
    $vnavn = $navn[$i];
    $vticker = $ticker[$i];
    $vk1 = $k1[$i];
    $vk2= $k2[$i];
    $vk3 = $k3[$i];
    echo "<p>Valuta $vnavn ($vticker) <img src='img/$vticker.png'> har følgende siste verdier: $vk1, $vk2 og $vk3.</p>\n";
    $i++;
};

// del 2
echo "<h1>del 2</h1>\n<pre>\n";
print_r ($v);
echo "</pre>\n<ul>";
$v = array(
    "BTC" => Array ("BTC", "Bitcoin", 1, 11, 17),
    "ETH" => Array ("ETH", "Ethereum", 0.1, 0.11, 0.17),
    "LTC" => Array ("LTC", "Litecoin", -1, -11, -17),
    "XMR" => Array ("XMR", "Monero", 1, 2, 3),
    "XRP" => Array ("XRP", "Ripple", 27, 69, -420),
);
foreach ($v as $valuta) {
    echo "\n\t<li>$valuta[0] ($valuta[1]): $valuta[2], $valuta[3] og $valuta[4].</li>";
};
echo "\n</ul>";

// del 3
echo "<h1>del 3</h1>\n<pre>\n";
print_r ($v2);
echo "</pre>\n<table>";
foreach ($v2 as $valuta) {
    echo "\n\t<tr>\n\t\t<td>" . $valuta["ticker"] . "</td>\n\t\t<td>(" . $valuta["navn"] . ")</td>\n\t\t<td>" . $valuta["k1"] . "</td>\n\t\t<td>" . $valuta["k2"] . "</td>\n\t\t<td>" . $valuta["k3"] . "</td>\n\t</tr>";
};
echo "</table>\n</body>\n</html>";

?>