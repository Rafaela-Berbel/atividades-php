<?php
function imc ($paramPeso, $paramAlt){
    return $paramPeso/($paramAlt*$paramAlt);
}
function classificacao($imc){
    if ($imc < 18.0){
        return "Abaixo do peso";}
    elseif($imc <=24.0){
        return "Peso ideal"; }
    elseif($imc <=29.0){
        return "Sobrepeso"; }
    elseif($imc <=34.0){
        return "Obesidade grau I"; }
    elseif($imc<=39.0){
        return "Obesidade grau II"; }
    else{
        return "Obesidade grau III"; }
}
function calcJuros( $paramC, $paramI, $paramT){
    $M= $paramC*(1+($paramI/100))**$paramT;
    return $M;
}
?>