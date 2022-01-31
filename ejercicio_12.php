<?php
//Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
//contorno hecho con asteriscos).

for($linea=8;$linea>=0;$linea--){
    
    for($asterisco=0;$asterisco<=$linea;$asterisco++){
        echo"*";
        
    }
    echo"<br/>";
}

?>