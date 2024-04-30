<?php

require_once 'functions/functions.php';

$data = get_data(API_URL);
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
    <main style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <section style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <h2>La próxima pelicula de Marvel</h2>
            <img src="<?= $data["poster_url"] ?>" alt="Poster DeadPool & Wolverine" style="width: 50%;">
        </section>

        <hgroup>
            <h3>Titulo: <?= $data["title"] ?></h3>
            <h4>Fecha de lanzamiento: <?= $data["release_date"] ?></h4>
            <h5><?= get_until_message($data["days_until"]); ?></h4>
                <br>
                <h6>Proximamente : <?= $data["following_production"]["title"] ?></h6>
        </hgroup>

    </main>
    <div style="display: flex; align-items: center; justify-content: center; flex-direction:column">
        <button id="btn" style="margin-top: 2rem;">Ver JSON</button>
        <br><br>
        <pre style="width: 70%; height:250px; font: size 10px; display:none;">
        <?php var_dump($data); ?>
        </pre>
    </div>


    <script>
        let btn = document.getElementById('btn');
        btn.addEventListener('click', () => {
            let pre = document.querySelector('pre');
            pre.style.display = pre.style.display === 'none' ? 'flex' : 'none';
        });
    </script>

</body>

</html>