<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultadod e la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*  Ejecutar la petición
y guardamos el resultado
*/

$result = curl_exec($ch);

//una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); //si solo quieres hacer un GET de una API

$data = json_decode($result, true);

curl_close($ch);


?>

<head>
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>
    <section>
        <img src="<?=$data["poster_url"];?>" width="300" alt="Poster de <?= $data["title"]; ?>"
        style = "border-radius: 16px;">
        <h2>La proxima pelicula de Marvel</h2>
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?> Se estrena en <?= $data["days_until"]; ?> dias</h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
<p>La siguiente peli es <?= $data["following_production"]["title"] ?></p>

    </hgroup>


</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 20px auto;
    }
</style>