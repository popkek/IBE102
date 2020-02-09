<?php
// Jahn-Eirik Husabø | 26.01.2020 | IBE 102: Oblig 3

// første deloppgave med velkomsthilsen
function OVERSKRIFT($string)
{
    $x = date("s");
    $color = "black";
    if ($x < 10) {
        $color = "blue";
    } elseif ($x < 20) {
        $color = "pink";
    } elseif ($x < 30) {
        $color = "yellow";
    } elseif ($x < 40) {
        $color = "black";
    } elseif ($x < 50) {
        $color = "silver";
    } else {
        $color = "red";
    }
    return "\t<font color='$color'><h1>$string</h1></font>\n";
};

// andre deloppgave med tallrekke hvor oddetall er røde
function TALLREKKE($start, $stopp)
{
    $return = "";
    $color2 = "blue";
    for ($x = $start; $x <= $stopp; $x++) {
        if ($x % 2 == 1) {
            $color2 = "red";
        } else {
            $color2 = "black";
        }
        $return = $return . "\t<font color='$color2'>$x</font> \n";
    };
    return $return;
};

// tredje deloppgave med do/while loop multiplikasjonstabellen
function MT($stopp)
{
    $return = "\t<table border='1'>\n";
    $x = 1;
    do {
        $y = 1;
        $return = $return . "\t\t<tr>\n";
        do {
            $z = $x * $y;
            if ($x == $y) {
                $return = $return . "\t\t\t<td><b>$z</b></td>\n";
            } else {
                $return = $return . "\t\t\t<td>$z</td>\n";
            }
            $y++;
        } while ($y <= $stopp);
        $return = $return . "\t\t</tr>\n";
        $x++;
    } while ($x <= $stopp);
    $return = $return . "\t</table>";
    return $return;
};

// fjerde deloppgave hvor 1 million terningkast simuleres med while/switch
function TERNING($stopp)
{
    $t1 = $t2 = $t3 = $t4 = $t5 = $t6 = 0;
    $x = 0;
    while ($x <= $stopp) {
        $T = rand(1, 6);
        switch ($T) {
            case 1:
                $t1++;
                break;
            case 2:
                $t2++;
                break;
            case 3:
                $t3++;
                break;
            case 4:
                $t4++;
                break;
            case 5:
                $t5++;
                break;
            case 6:
                $t6++;
                break;
        }
        $x++;
    }
    return "\n\t<table border='4'>
\t\t<tr>\n\t\t<td>1</td>\n\t\t\t<td>$t1</td>\t\t\n\t\t</tr>
\t\t<tr>\n\t\t<td>2</td>\n\t\t\t<td>$t2</td>\t\t\n\t\t</tr>
\t\t<tr>\n\t\t<td>3</td>\n\t\t\t<td>$t3</td>\t\t\n\t\t</tr>
\t\t<tr>\n\t\t<td>4</td>\n\t\t\t<td>$t4</td>\t\t\n\t\t</tr>
\t\t<tr>\n\t\t<td>5</td>\n\t\t\t<td>$t5</td>\t\t\n\t\t</tr>
\t\t<tr>\n\t\t<td>6</td>\n\t\t\t<td>$t6</td>\t\t\n\t\t</tr>
\t</table>";
};

// alt printes til slutt ved en enkel echo
$CONTENT = OVERSKRIFT("Velkomsthilsen") . TALLREKKE(20, 49) . MT(9) . TERNING(1000000);

echo "<!DOCTYPE html>
<html>
<head>
\t<style>
\t\th1 {text-shadow: 1px 1px #000000;}
\t</style>
</head>
<body>
" . $CONTENT . "
</body>
</html>";
