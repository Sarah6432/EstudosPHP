<?php

$nota = 3;

if ($nota >= 7) {
    echo "Aluno aprovado";
} else if ($nota < 7 && $nota >= 4) {
    echo "Aluno está na recuperação";
} else if ($nota < 4 && $nota >= 2) {
    echo "Aluno está em conselho de classe";
} else {
    echo "aluno reprovado";
}
