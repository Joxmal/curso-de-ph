<?php
$tuEdad = 40;


$isOld =  $tuEdad >= 40 ;
$isDev =  $tuEdad <= 30  && $tuEdad >= 20 ;

$ternearia = $tuEdad > 30
  ? "lo sineto eres viejo"
  : "eres un joven";
?>

// segunda forma 

<?php if ($isOld) : ?>
  <h1>eres un viejo lo siento</h1>
<?php elseif ($isDev) : ?>
  <h1>eres un joven pero estas en camino a espicharte</h1>
<?php else : ?>
<h1>yo no se que vaina eres tu</h1>
<?php endif; ?>

<?= "<h1>ternearia:</h1> $ternearia" ?>





