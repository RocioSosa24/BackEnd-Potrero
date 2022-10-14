<h1>ESTRUCTURAS DE CONTROL: PARTE 2</h1>

<h2>Mostrar los números del 1 al 100.</h2>

<?php
for ($i=1; $i <= 100; $i++) {
  echo "$i\n";
}
?>

<h2>Mostrar los números del 100 al 1.</h2>

<?php
for ($i=100; $i >= 1; $i--) {
  echo "$i\n";
}
?>

<h2>Mostrar los números pares del 1 al 100.</h2>

<?php
for ($i=0; $i <= 100; $i+=2) {
  echo "$i\n";
}
?>

<h2>Mostrar los números impares del 1 al 100.</h2>

<?php
for ($i=1; $i <= 100; $i+=2) {
  echo "$i\n";
}
?>

<h2>Mostrar la suma de los números de 1 a 20.</h2>

<?php
$suma = 0;
for ($i=0; $i < 21 ; $i++) {
  $suma += $i;
}
echo "$suma";
?>

<h2>Mostrar la suma de números pares de 1 a 20.</h2>

<?php
$suma = 0;
for ($i=0; $i < 21 ; $i+=2) {
  $suma += $i;
}
echo "$suma";
 ?>
