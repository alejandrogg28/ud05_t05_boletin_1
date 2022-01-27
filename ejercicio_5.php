<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<?php
//Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectiva-
//mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
//y la multiplicación.
$x=144;
$y=999;
echo "Valor de X = ".$x." y valor de Y= ".$y;
$suma = $x+$y;
$resta=$x-$y;
$division=$x/$y;
$multiplicacion=$x*$y;
echo "<p>La suma de x e y es </p>".$suma;
echo "<p>La resta de x e y es </p>".$resta;
echo "<p>La división entre x e y es </p>".$division;
echo "<p>La multiplicación de x e y es </p>".$multiplicacion;
?>
</body>
</html>