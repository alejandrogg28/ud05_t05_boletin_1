<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín uno</title>
</head>
<body>
<?//aun no hice el commit?> 

<?php
//Ejercicio 1. Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.
echo "Mi nombre es Alejandro"
?>

<?php
//Ejercicio 2. Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato
//se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando
//tanto HTML como PHP
echo "<p>Mi nombre es Alejandro</p>";
echo "<p>Dirección: Calle A Número 8 3A</p>";
?>

<?php
//Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
//traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
//<table> de HTML.

echo "<table border='1'>";
echo "<tr><td><h3>Castellano</h3></td>";
echo "<td><h3>Inglés</h3></td></tr>";
echo "<tr><td>Hola</td>";
echo "<td>Hello</td></tr>";
echo "<tr><td>Papel</td>";
echo "<td>Paper</td></tr>";
echo "<tr><td>Adios</td>";
echo "<td>Goodbye</td></tr>";
echo "<tr><td>Uno</td>";
echo "<td>One</td></tr>";
echo "<tr><td>Dos</td>";
echo "<td>Two</td></tr>";
echo "<tr><td>Tres</td>";
echo "<td>Three</td></tr>";
echo "<tr><td>Cuatro</td>";
echo "<td>Four</td></tr>";
echo "<tr><td>Cinco</td>";
echo "<td>Five</td></tr>";
echo "<tr><td>Seis</td>";
echo "<td>Six</td></tr>";
echo "<tr><td>Siete</td>";
echo "<td>Seven</td></tr>";
echo "</table>";
echo "";
?>

<?php
//Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
//íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
//para familiarizarte con éste último.
echo "<table border=2>";
echo "<tr><td><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th></td></tr>";
echo "<tr><td><th>IAW</th></td></tr>";
echo "<tr><td><th>IAW</th></td></tr>";
echo "<tr><td><th>SRI</th></td></tr>";
echo "<tr><td><th>DESCANSO</th></td></tr>";
echo "<tr><td><th>SRI</th></td></tr>";
echo "<tr><td><th>ASO</th></td></tr>";
echo "<tr><td><th>ASXBD</th></td></tr>";
echo"</table>";
?>

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

<?php
//Crea la variable $nombre y asígnale tu nombre completo. Muestra su valor por pantalla de tal forma
//que el resultado sea el mismo que el del ejercicio 1
echo "<p></p>";
$nombre="Alejandro";
$apellido1="García";
$apellido2="González";
echo $nombre ." ".$apellido1." ".$apellido2;
?>

<?php
//Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. Muestra los
//valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.
echo "<p></p>";
$nombre="Alejandro";
$direccion="Calle C Nº1 3A";
$telefono="986783251";
echo "Nombre: ".$nombre." , Dirección: ".$direccion." , Teléfono: ".$telefono;
?>

<?php
//Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
//almacenada en una variable.
    $horario = array(
        '8:50 - 9:40' => array('IAW','SAD','ASX','ASX','IAW'),
        '9:40 - 10:30' => array('IAW','SAD','EIEA','ASX','SRI'),
        '10:30 - 11:20' => array('SRI','SAD','EIEA','ASX','SRI'),
        '11:20 - 12:00' => array('Recreo'),
        '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
        '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
        '13:40 - 14:30' => array('ASX','ASO','IAW','SRI','SAD'),
        '14:30 - 16:00' => array('Mediodía'),
        '16:00 - 16:50' => array('','SRI','','ASO',''),
        '16:50 - 17:40' => array('','SRI','','ASO',''),
        '17:40 - 18:30' => array('','SRI','','ASO','')
    );

    echo "<table border='1'>";
    echo "<tr><th></th><th>LUNS</th><th>MARTES</th><th>MÉRCORES</th><th>XOVES</th><th>VENRES</th></tr>";
    foreach($horario as $hora => $modulos){
        echo "<tr>";
        echo "<th>".$hora."</th>";
        foreach($modulos as $m){
            if(count($modulos)==1){
                echo "<td colspan='5'>".$m."</td>";
            }else{
                echo "<td>".$m."</td>";
            }
        }
        
        echo "</tr>";
    }

    echo "</table>";

?>
<?php
//Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. Muestra los
//valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.
$nombre = "Alejandro";
$direccion="Calle A Numero 8 3 A";
$telefono = "987654321";

$datos_usuario="Nombre: ".$nombre."<p>Dirección: </p> ".$direccion."<p>Teléfono: </p>".$telefono;
echo $datos_usuario;
?>

<?php
//Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
//almacenada en una variable.

?>

</body>

</html>

