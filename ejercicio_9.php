<?php
//Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
//almacenada en una variable.
header('Content-Type:text/html;charset=UTF-8');
$pesetas=$_REQUEST["caixaPesetas"];
$euros= $pesetas / 166;
echo "A cantidade indicada en euros é: ".$euros;
?>