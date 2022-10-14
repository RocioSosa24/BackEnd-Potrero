<h1>MATRICES</h1>
<h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2>
<?php
$pares =[2,4,6,8,10,12,14,16,18,20];
foreach ($pares as $numeros) {
  print "<p> $numeros</p>\n";
}
?>

<h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h2>

<?php

$a = ["Pedro", "Ana", 34, 1];
print "<pre>\n";

print_r($a);
print "</pre>\n";

//3. Crear un array asociativo e introducir los siguientes valores
$datos = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Dirección' => "Av. Mayor 3703", 'Teléfono' => "1122334455"];
?>

<h2>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.</h2>

<?php
$ciudades =["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles","Chicago"];
foreach ($ciudades as $indice => $valor) {
  print"<p> La ciudad con el índice $indice tiene el nombre $valor.</p>\n";
}
?>

<h2>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.</h2>

<?php
$ciudades =['MD' => "Madrid",'BCL'=> "Barcelona", 'LD' =>"Londres", 'NY' =>"New York", 'LA' =>"Los Ángeles",
'CCG'=>"Chicago"];
foreach ($ciudades as $indice => $valor) {
  print"<p>  El índice de $valor es $indice.</p>\n";
}

 ?>
