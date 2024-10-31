<?php 

function divisao($dividendo, $divisor)
{ 
   try{
       if($divisor == 0){
   
       throw new RangeException("não pode ser dividido por 0");
       }//por causa de problemas aritiméticos 
       $resultado = $dividendo/ $divisor;

       echo "O resultado é :" .$resultado;
       }catch(Exception){
         echo "o numero não pode ser dividido por 0";
       }
       finally{ 
        echo "<br/> tratando excecões";
       }

}

divisao(10,0);