<?php
//Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
//pirámide debe estar formada por 9 asteriscos

for ($linea=0;$linea<=8;$linea++)
{
    for($asterisco=0;$asterisco<=$linea;$asterisco++){
        echo "*";
    }
 
    echo "<br/>";
}
?>