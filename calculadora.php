<?php
$operacion = $_POST['op'];
$primerNumero = $_POST['n1'];
$segundoNumero = $_POST['n2'];

if ($operacion == "s") {
    $resultado = $primerNumero + $segundoNumero;
} else if ($operacion == "r") {
    $resultado = $primerNumero - $segundoNumero;
} else if ($operacion == "m") {
    $resultado = $primerNumero * $segundoNumero;
} else if ($operacion == "d") {
    if ($segundoNumero != 0) {
        $resultado = $primerNumero / $segundoNumero;
    } else {
        $resultado = "Error";
    }
}

echo $resultado;
?>
