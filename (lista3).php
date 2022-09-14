<?php

$a = ["verde", "vermelho", "azul", "roxo"];
$b = ["verde", "vermelho", "roxo"];

$c = array_diff($a, $b); //traz apenas o que for diferente do 1 vetor para os demais

oprint_r($c);
?>
