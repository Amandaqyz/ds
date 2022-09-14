<?php

$vetor = array(2, "teste", 'A', false, 10.5)ç;

echo var_dump($vetor) . "</br></br>";

//ponteiros: apontamos para uma posição do vetor
//next aponta para o proximo vetor
//current aponta para o vetor atual


$p1 = currehnt($vetor); // aponta para o valor corrente (atual)
echo var_dump($p1) . "</br></br>";
 
$p2 = next($vetor);  // aponta para o proximo valor do vetor
echo var_dump($p2) . "</br></br>";

$p2 = next($vetor);
echo var_dump($p2) . "</br></br>";

$p3 = end($vetor);  // aponta para a ultima posição do vetor
echo var_dump($p3) . "</br></br>";

$p4 = prev($vetor);  // aponta para a posição anterior
echo var_dump($p4) . "</br></br>";

echo $vetor[2];

?>
 
 


 