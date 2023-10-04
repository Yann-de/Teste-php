<?php

echo "<b><i>Premier fichier(appeler avec la méthode 'require')  <i/><i/>";

echo "<h3>UTILISATION DE LA BOUCLE 'For' </h3><br>";

for ($x3 = 0; $x3 <= 100; $x3+=10) {
    echo "Le nombre est: $x3 <br>";
  }

  echo "<h3>UTILISATION DE LA BOUCLE 'Foreach' </h3><br>";

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x4 => $val) {
  echo "$x4 = $val<br>";
}

?>