<?php
/* ++$a Pré-incremento incrementa $ a em um, e então retorna $a.
   $a++ Pós-incremento Retorna $a, e então incrementa $a em um.
   --$a Pós-incremento Decrementa $a em um, e então retorna $a.
   $a-- Pós-decremento Retorna $a, e então decrementa $a em um.
*/
/*echo "Pós-incremento\n";
$a = 5;
echo "Deve ser 5: ". $a++ ."\n";
echo "Deve ser 6: ". $a ."\n";

echo "Pré-incremento\n";
$a = 5;
echo "Deve ser 6: ". ++$a ."\n";
echo "Deve ser 6: ". $a ."\n";

echo "Pós-decremento\n";
$a = 5;
echo "Deve ser 5: ". $a-- ."\n";
echo "Deve ser 4: ". $a ."\n";

echo "Pré-decremento\n";
$a = 5;
echo "Deve ser 4: ". --$a ."\n";
echo "Deve ser 4: ". $a ."\n";
*/

echo "Pré-decremento\n";
$a = null;
echo "Deve ser : ". --$a ."\n";
echo "Deve ser : ". $a ."\n";

echo "Pós-incremento\n";
$a = null;
echo "Deve ser : ". $a++ ."\n";
echo "Deve ser : ". $a ."\n";

echo "Pré-decremento\n";
$a = null;
echo "Deve ser : ". ++$a ."\n";
echo "Deve ser : ". $a ."\n";
