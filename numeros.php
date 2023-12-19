<?php
$suma = 0;
$num = array();

for ($i = 0; $i < 10; $i++) {
    $numal = rand(-50000, 50000);
    $num[] = $numal;
    echo $numal;

    if ($numal % 2 == 0) {
        echo " (par)";
    } else {
        echo " (impar)";
    }

    $suma += $numal;

    if ($i < 9) {
        echo ",";
    }
}

$prom = $suma / 10;
$numeroMayor = max($num);
$numeroMenor = min($num);

echo "\n\nLa suma de los números es: " . $suma;
echo "\nEl promedio de los números es: " . $prom;
echo "\nEl número en la posición 5 es: " . $num[4];
echo "\nEl número mayor es: " . $numeroMayor;
echo "\nEl número menor es: " . $numeroMenor;
?>