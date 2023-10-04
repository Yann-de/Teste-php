<?php

echo "<b><i>Deuxième fichier(appeler avec la méthode 'include')  <i/><i/>";


$x1 = 0;

echo "<h3>UTILISATION DE LA BOUCLE 'WHILE' </h3><br>";

while($x1 <= 100) {
echo "le nombre est: $x1 <br>";
$x1+=10;
}


echo "<h3>UTILISATION DE LA BOUCLE 'DO...WHILE' </h3><br>";

$x2 = 6;

do {
  echo "le nombre est: $x2 <br>";
  $x2++;
} while ($x2 <= 5);


?>