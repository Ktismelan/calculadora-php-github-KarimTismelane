<?php

function calcular($operacion, $a, $b) {

    switch ($operacion) {
        case "suma":
            return $a + $b;
        case "resta":
            return $a - $b;
        case "multiplicacion":
            return $a * $b;
        case "division":
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Error";
            }
        default:
            return "Operacion no valida";
    }
}

$operacion = $_POST['op'];
$primerNumero = $_POST['n1'];
$segundoNumero = $_POST['n2'];

$resultado = calcular($operacion, $primerNumero, $segundoNumero);

echo $resultado;

?>
