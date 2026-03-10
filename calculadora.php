<?php

function calcular($operacion, $a, $b) {

    if ($operacion == "s") {
        return $a + $b;
    } else if ($operacion == "r") {
        return $a - $b;
    } else if ($operacion == "m") {
        return $a * $b;
    } else if ($operacion == "d") {

        if ($b != 0) {
            return $a / $b;
        } else {
            return "Error";
        }

    }

}

$operacion = $_POST['op'];
$primerNumero = $_POST['n1'];
$segundoNumero = $_POST['n2'];

$resultado = calcular($operacion, $primerNumero, $segundoNumero);

echo $resultado;

?>
