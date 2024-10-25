<?php

function f1()
{
    echo "f1 esta antes da exceção"."<br/>";
}

function f2($int)
{
    if (!is_int( $int)) {
        throw new Exception( "O argumento não é do tipo esperado"."<br/>");
    } else {
        echo "F2 está na exceção" ."<br/>";
    }

    f3();

}

function f3(){
    echo "f3 está depois da exceção";
}
f1();
f2(
    int: 5
);
