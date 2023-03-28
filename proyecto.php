<?php

echo "Introduce la hora (0-23): ";
$hora = intval(fgets(STDIN));
echo "Introduce los minutos (0-59): ";
$minutos = intval(fgets(STDIN));
echo "Introduce los segundos (0-59): ";
$segundos = intval(fgets(STDIN));

if ($hora < 0 || $hora > 23 || $minutos < 0 || $minutos > 59 || $segundos < 0 || $segundos > 59) {
    echo "Error en la hora introducida";
    exit();
}

$start_time = strtotime($hora . ":" . $minutos . ":" . $segundos);
$result_time = date("H:i:s", time() - $start_time);

echo "La hora es: " . $result_time;
?>
