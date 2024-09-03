<?php
//algoritimo bublle sort
$arr = [9,5,2,4,1];

$qtd_elementos_array = count($arr);


for ($i=0; $i<$qtd_elementos_array -1; $i++) {
    for ($PosicaoAtual=0; $PosicaoAtual<$qtd_elementos_array - $i -1; $PosicaoAtual++) {

        $ProximaPosicao = $PosicaoAtual+1;

        if ($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {

            $auxiliar = $arr[$PosicaoAtual];
            $arr[$PosicaoAtual] = $arr[$ProximaPosicao];
            $arr[$ProximaPosicao] = $auxiliar;
        }
    }
}
print_r($arr) . "\n";
