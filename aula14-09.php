<!-- Faça um programa que tenha dois vetores númericos de 3 posições
cada, e um terceiro vetor vazio de acordo com uma operação escolhida
(+,-,*,/), faça o cálculo ewntre os valores do 1 com o 2 vetor, e preencha
o 3 vetor, e mostre os três vetores -->


<?php

    $vetor1 = [2, 3, 4];
    $vetor2 = [5, 6, 7];
    $vetor3 = [];
    $operacao = "+";

    for($i = 0; $i < count($vetor1); $i++){
        switch($operacao){
            case'+':
                $vetor3[]= $vetor1[$i] + $vetor2[$i];
                break;
            case '-':
                $vetor3[] = $vetor1[$i] - $vetor2;
            break;
            

        }
    }
