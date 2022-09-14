<!-- crie um vewtor de 5 posições de numeros inteiros, ordene as posições pelaas chaves 
em ordem crescente, faça um laço de repetição onde você deve fazer o quadrado de cada
valor contido no vetor, e criar um novo vetor com os novos valores mostre na tela todas
as informaçoes possíveis. :(

<?php

$valores = [3, 30, 4, 7, 6];
$quadrados = [];

echo var_dump(|$valores) ."</br></br>";

asort($valores);
echo var_dump($valores) . "</br></br>";

for($i = 0; $i < count($valores); $i++){
    $quadrados[] = $valores[$i] * $valores[$i];
}
?>