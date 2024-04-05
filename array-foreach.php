<?php
$bestLanguages = ["PHP","JAVAESCRIPT","PYTHON",1,2];
$bestLanguages[3] = "JAVA"; // cambia el 1 por java
$bestLanguages[0] = "JAVASCRIPT"; // cambia el 0 
$bestLanguages[] = "TYPESCRIPT"; // AGREGA UN NUEVO VALOR AL FINAL DEL ARRAY
?>


<?= $bestLanguages[5] ?>

<ul>
<?php  foreach ($bestLanguages as $key => $languajes) : ?>
  <li> <?= $key." ".$languajes ?> </li>
<?php  endforeach; ?>
</ul>
