<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicios</h1>
    <h2>Punto 1</h2>
<?php
$numA = 2;
if ($numA > 0) {
  echo "El valor de la variable es positivo";
}
else {
  echo "El valor de la variable es negativo";
}
?>
<hr>
<br>
<h2>Punto 2</h2>
<?php
$numB = 4;
if ($numB > 1 & $numB < 10) {
  echo "El valor de la variable es " . $numB . ", que es mayor a 1 y menor que 10";
}
?>
<hr>
<br>
<h2>Punto 3</h2>
<?php
$numC = 24;
if ($numC > 10) {
  echo "El valor de la variable es mayor a 10";
  }
  elseif ($numC < 2) {
    echo "El valor de la variable es menor a 2";
}
else {
  echo "El valor de la variable es mayor a 2 y menor que 10";
}
?>
<hr>
<br>
<h2>Punto 4</h2>
<?php
$numero1 = 5;
$numero2 = 8;
echo "Variable Numero 1 = " . $numero1;
echo ". Variable Numero 2 = " . $numero2;
?>
<br>
<?php
if ($numero1 > $numero2) {
  echo "La suma de las variables es igual a " . ($numero1 + $numero2);
?>
<br>
<?php
echo "La resta de las variables es igual a " . ($numero1 - $numero2);
}
elseif ($numero2 > $numero1) {
  echo "El resultado de la multiplicacion entre las variables es igual a " . ($numero2 * $numero1);
  ?>
  <br>
  <?php
  echo "El resultado de la division entre las variables es igual a " . ($numero2 / $numero1);
  ?>
  <br>
  <?php
  echo "El resto de la division entre las variables es igual a " . ($numero2 % $numero1);
}
else {
  echo "Los números ingresados son iguales";
}

 ?>





  </body>
</html>
