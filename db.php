<?php

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
