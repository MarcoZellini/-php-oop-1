<?php

/* 
    Creare un file index.php in cui:
    è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
        Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
        Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
*/

class Movie
{
    public $poster;
    public $title;
    public $vote;
    public $genres;
    public $language;

    function __construct($_posterId, $_title, $_vote, $_genres, $_language)
    {
        $this->setPoster($_posterId);
        $this->setTitle($_title);
        $this->setVote($_vote);
        $this->setGenres($_genres);
        $this->setLanguage($_language);
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function setPoster($_posterId)
    {
        $this->poster = 'https://picsum.photos/200/200?random=' . $_posterId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getVote()
    {
        return $this->vote;
    }

    public function setVote($_vote)
    {
        $this->vote = $_vote;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setGenres($_genres)
    {
        $this->genres = $_genres;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($_language)
    {
        $this->language = $_language;
    }
}

$movies = [];

array_push(
    $movies,
    new Movie(1, "Matrix", 5, ['Action', "Adventure"], "English"),
    new Movie(2, "Spider-Man", 4.5, ['Action', "Adventure"], "Italian"),
    new Movie(3, "Matrix 2", 2, ['Drama', "Thriller"], "French"),
    new Movie(4, "Spider-Man 2", 4.5, ['Horror', "Thriller"], "Spanish"),
    new Movie(5, "Matrix 3", 5, ['Action', "Adventure"], "English"),
    new Movie(6, "Spider-Man 3", 5, ['Drama', "Horror"], "Italian"),
    new Movie(7, "Matrix 4", 3, ['Fantasy', "Romance"], "French"),
    new Movie(8, "Spider-Man 4", 2.5, ['Action', "Adventure"], "Spanish")
);
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
                <?php foreach ($movies as $i => $movie) : ?>
                    <div class="col">
                        <div class="card border-0 h-100">
                            <img class="card-img-top" src="<?= $movies[$i]->getPoster() ?>"></img>
                            <div class="card-body">
                                <h4>Title: <?= $movies[$i]->getTitle() ?></h5>
                                    <h5>Genres:</h5>
                                    <ul>
                                        <?php foreach ($movies[$i]->getGenres() as $genre) : ?>
                                            <li><?= $genre; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <h5>Voto: <?= $movies[$i]->getVote() ?></h5>
                                    <h5>Language<?= $movies[$i]->getLanguage() ?>
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