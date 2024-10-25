<?php
/* while(condição){
  //..
} 
do{
//..
}while(condição);  
*/
$frutas = ["banana", "maça", "pera", "uva"];

$contador = count($frutas);

$i = 2;
while ($i < $contador) {

    echo $frutas[$i] . "\n";

    $i++;
}
