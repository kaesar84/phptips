<?php

const API_URL = 'https://whenisthenextmcufilm.com/api';
# https://github.com/DiljotSG/MCU-Countdown/tree/develop

#Incicializar una nueva sesion de cURL; ch = curl handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no imprimirlo directamente
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la petición y guardar el resultado
$result = curl_exec($ch);


//una alternativa a la función file_get_contents()
// $result = file_get_contents(API_URL);

$data = json_decode($result, true);

curl_close($ch);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<body>
    <main>
        <section style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <h2>La próxima pelicula de Marvel</h2>
            <img src="<?= $data["poster_url"] ?>" alt="Poster DeadPool & Wolverine" style="width: 50%;">
        </section>

        <hgroup>
            <h3>Titulo: <?= $data["title"] ?></h3>
            <h4>Fecha de lanzamiento: <?= $data["release_date"] ?></h4>
            <h5>Faltan <?= $data["days_until"] ?> días</h4>
                <br>
                <h6>Proximamente : <?= $data["following_production"]["title"] ?></h6>
        </hgroup>

        <button id="btn" style="margin-top: 2rem;">Ver JSON</button>
        <br><br>
        <pre style="width: 100%; height:250px; font: size 10px; display:none;">
        <?php var_dump($data); ?>
        </pre>


        <script>
            let btn = document.getElementById('btn');
            btn.addEventListener('click', () => {
                let pre = document.querySelector('pre');
                pre.style.display = pre.style.display === 'none' ? 'flex' : 'none';
            });
        </script>

    </main>




</body>

</html>