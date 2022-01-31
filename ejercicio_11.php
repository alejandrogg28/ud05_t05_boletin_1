<?php
//Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
//contorno hecho con asteriscos).

for ($linea=0;$linea<=8;$linea++)
{
    for($asterisco=0;$asterisco<=$linea;$asterisco++){
        
        if($asterisco==0 || $asterisco==$linea || $linea==8){
            echo "*";
        }
        else{
            echo '&nbsp;&nbsp;';
        }
        
    }
    echo "<br/>";

}

?>

