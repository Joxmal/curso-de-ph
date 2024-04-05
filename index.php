<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# inicializamos una nueva session de cURL 
$ch = curl_init(API_URL);
//indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

/*ejecutar la peticion 
  y guardamos el resultado
*/
$result= curl_exec($ch);

$data = json_decode($result,true);
curl_close($ch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
  <title>Document</title>
</head>
<body>
<main> 
  <section >
    <img src=" <?= $data["poster_url"] ?>" width="300" alt="poster"  style="border-radius: 16px ;">
  </section>

  <hgroup>
    <h2> <?= $data["title"]; ?> se estrena en <?= $data["days_until"]?> días </h2>
    <p>fecha de estreno <?= $data["release_date"] ?> </p>
    <p>la siguiente es: <?= $data["following_production"]["title"] ?> </p>
  </hgroup>


</main>


<style>
  :root{
    color-scheme: light dark;
  }

  body{
    display: grid;
    place-content: center;
  }

  section{
    display: flex;
    justify-content: center;
    text-align: center;

  }

  hgroup{
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
  }

  img{
    margin:  0 auto;

  }

</style>


</body>
</html>
 



