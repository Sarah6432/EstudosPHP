<?php
/*switch case -usado para analisa diversos valores
 para uma mesma variavel;
*/
$sorteio = rand(0,5);// função rand gera um numero randomico - c valor minimo e valor máximo

echo"valor sorteado:", $sorteio;
switch ($sorteio) {
    case 0:
        echo " => você ganhou 2 pontos";
        break;
    case 1:
        echo " => você ganhou 1 ponto";
        break;
    case 2:
        echo " => voce ganhou um bonus! parabens ganhou tres pontos";
        break;
    default:
    echo " jogue novamente";
    }