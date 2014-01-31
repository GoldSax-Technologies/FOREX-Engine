<?php
require_once "Matrix.php";

function polyfit($X, $Y, $n) {  
  for ($i = 0; $i < sizeof($X); $i++) 
      for ($j = 0; $j <= $n; $j++) 
        $A[$i][$j] = pow($X[$i], $j);
  for ($i=0; $i < sizeof($Y); $i++)
    $B[$i] = array($Y[$i]);   
  $matrixA = new Matrix($A);
  $matrixB = new Matrix($B);
  $C = $matrixA->solve($matrixB);
  return $C->getMatrix(0, $n, 0, 1);
}

function printpoly( $C = null ) {
  for($i = $C->m - 1; $i >= 0; $i-- ) {
    $r = $C->get($i, 0);
    if ( abs($r) <= pow(10, -9) )
      $r = 0;
    if ($i == $C->m - 1)
      echo $r . "x<sup>$i</sup>";
    else if ($i < $C->m - 1)
      echo " + " . $r . "x<sup>$i</sup>";
    else if ($i == 0)
      echo " + " . $r;
  }
}

$file_handle = fopen("USDSEK.txt", "rb");
$c = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode(':', $line_of_text);
if($parts[0] > 0 ) {
$tc[$c] = $parts[0];
$ti[$c] = $c;

$c++;
}
}
$c--;

fclose($file_handle);

$X = $ti;
$Y = $tc;
$points = new Matrix(array($X, $Y));
$points->toHTML();
printpoly(polyfit($X, $Y, 5));

plotpoly(polyfit($X, $Y, 5));

$io = file_get_contents("USDSEKLAST.txt");

echo $io;




?> 