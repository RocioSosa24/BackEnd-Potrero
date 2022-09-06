<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Trabajo Práctico número 1</h1>
    <h2>Ejercicio 1</h2>
    <?php
    echo "Hola mundo";
     ?>
     <br>
     <h2>Ejercicio 2</h2>
     <?php
     $saludo = "Hola mundo";
echo $saludo;
      ?>
      <br>
      <h2>Ejercicio 3</h2>
      <h3>Valores: 5 y 2</h3>
      <?php
      $valorA = 5;
      $valorB = 2;
echo "La suma de los valores es igual a ", ($valorA + $valorB);
       ?>
       <hr>
       <?php echo "La resta de los valores es igual a ", ($valorA - $valorB); ?>
       <hr>
       <?php echo "La multiplicacion de los valores es igual a ", ($valorA * $valorB); ?>
       <hr>
       <?php echo "La división de los valores es igual a ", ($valorA / $valorB); ?>
       <hr>
       <?php echo "El resto de la división de los valores es igual a ", ($valorA % $valorB); ?>
<hr>
<h2>Ejercicio 4</h2>
<?php
$gradosC = 20;

$transformacion = $gradosC*1.8 + 32;

echo "20° Celsius son " , $transformacion , "° Farenheit";
 ?>
<h2>Ejercicio 5</h2>
<h3>Rectángulo con base de 18cm y altura de 12cm</h3>
<?php
$baseR = 18;
$alturaR = 12;
$perimetroR = $baseR *2 + $alturaR *2;
$areaR = $baseR * $alturaR;
echo "Perímetro: " , $perimetroR , "cm.";
?>
<br>
<hr>
<?php
 echo "Área: " , $areaR , "cm.";
?>
<h3>Círculo con radio de 30cm</h3>
<?php
$radioC = 30;
$pi = 3.14;
$areaC = $pi * $radioC ** 2;
$perimetroC = ($radioC * 2) * $pi;
echo "Área: " , $areaC , "cm.";

 ?>
 <br>
 <hr>
 <?php
 echo "Perímetro: " , $perimetroC , "cm.";
  ?>



  </body>
</html>
