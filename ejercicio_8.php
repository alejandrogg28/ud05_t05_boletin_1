<?php
//Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
//almacenada en una variable.
header('Content-Type:text/html;charset=UTF-8');
$euros=$_REQUEST["caixaEuros"];
$pesetas= $euros * 166;
echo "A cantidade indicada en pesetas é: ".$pesetas;
?>