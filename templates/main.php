<main style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <section>
        <h2>La próxima pelicula de Marvel</h2>
        <img src="<?= $poster_url?>" alt="Poster DeadPool & Wolverine">
    </section>

    <hgroup>
        <h3>Titulo: <?= $title ?></h3>
        <h4>Fecha de lanzamiento: <?= $release_date ?></h4>
        <h5><?= get_until_message($days_until); ?></h4>
            <br>
            <h6>Proximamente : <?= $following_production["title"] ?></h6>
    </hgroup>



    <div>
        <button id="btn">Ocultar JSON</button>
        <br><br>
        <pre>
        <?php var_dump($data); ?>
        </pre>
    </div>


</main>