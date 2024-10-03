<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confronto Numeri</title>
</head>
<body>

<?php
    $x = 15;
    $y = 10;

    if ($x > $y) {
        echo "<h1>$x è maggiore di $y</h1>";
        $max = $x;
    } elseif ($x < $y) {
        echo "<h1>$x è minore di $y</h1>";
        $max = $y;
    } else {
        echo "<h1>$x è uguale a $y</h1>";
        $max = $x;
    }

    if ($max < 10) {
        echo "<p>Il valore massimo ($max) è minore di 10</p>";
    } elseif ($max >= 10 && $max <= 20) {
        echo "<p>Il valore massimo ($max) è compreso tra 10 e 20</p>";
    } elseif ($max >= 21 && $max <= 30) {
        echo "<p>Il valore massimo ($max) è compreso tra 21 e 30</p>";
    } else {
        echo "<p>Il valore massimo ($max) è maggiore di 30</p>";
    }
?>

</body>
</html>
