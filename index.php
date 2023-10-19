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
    public $title;
    public $vote;
    public $genres;
    public $language;

    function __construct($_title, $_vote, $_genres, $_language)
    {
        $this->setTitle($_title);
        $this->setVote($_vote);
        $this->setGenres($_genres);
        $this->setLanguage($_language);
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

$movie_1 = new Movie("Matrix", 5, ['Action', "Adventure"], "English");
$movie_2 = new Movie("Spider-Man", 4.5, ['Action', "Adventure"], "Italiano");

var_dump($movie_1);
var_dump($movie_2);
