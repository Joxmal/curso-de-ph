<?php
$tuEdad = 23;

$name = "jose montes";

$isOld =  $tuEdad >= 40 ;
$isDev =  $tuEdad <= 30  && $tuEdad >= 20 ;

$ternearia = $tuEdad > 30
  ? "lo sineto eres viejo"
  : "eres un joven";
  
  
$outputAge = match (true){
  $tuEdad < 2  => "eres un bebe, $name " ,
  $tuEdad < 10 => "eres un bebe grande, $name " ,
  $tuEdad < 15 => "eres un edolecente, $name " ,
  $tuEdad === 18 => "eres mayor de edad, $name " ,
  $tuEdad < 30 => "eres un adulto, $name " ,
  default => "hueles a madera, $name " ,
};
?>


<?= "<h1>match: $outputAge</h1> " ?>





