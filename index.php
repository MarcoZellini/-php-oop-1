<?php

/* 
    Creare un file index.php in cui:
    è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
        Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
        Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
*/

include __DIR__ . '/models/Movie.php';
include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header id="iste_header" class="bg-dark text-white p-2">
        <h1 class="text-center">MovieList</h1>
    </header>
    <!-- /#iste_header -->
    <main id="site_main" class="bg-secondary p-5">
        <div class="container">
            <div class="row row-cols-4 g-5">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card border-0 h-100">
                            <img class="card-img-top" src="<?= $movie->getPoster() ?>"></img>
                            <div class="card-body">
                                <h4>Title: <?= $movie->getTitle() ?></h5>
                                    <h5>Genres:</h5>
                                    <ul>
                                        <?php foreach ($movie->getGenres() as $genre) : ?>
                                            <li><?= $genre; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <h5>Voto: <?= $movie->getVote() ?></h5>
                                    <h5>Language: <?= $movie->getLanguage() ?>
                                </h4>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#site_main -->
    <footer id="site_footer" class="bg-dark m-0">
        <h6 class="text-center text-white p-2 m-0">Zellini Marco 2023 &copy;</h6>
        <!-- /.text-center text-white -->
    </footer>
    <!-- /#site_footer -->
</body>

</html>