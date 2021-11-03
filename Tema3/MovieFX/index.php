<?php

require "src/Movie.php";

//require "movies.inc.php";

$pdo = new PDO("mysql:host=mysql-server;dbname=movieFX;charset=utf8", "dbuser", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$moviesStmt = $pdo->prepare("SEELECT * FROM movie");
$moviesStmt->setFetchMode(PDO::FETCH_ASSOC);
$moviesStmt->execute();

$moviesAr = $moviesStmt->fetchAll();

foreach ($moviesAr as $movieAr) {
    $movie = new Movie();
    $movie->setId((int)$movieAr["id"]);
    $movie->setTitle($movieAr["title"]);
    $movie->setPoster($movieAr["poster"]);
    $movie->setReleaseDate($movieAr["release_date"]);
    $movie->setOverview($movieAr["overview"]);
    $movie->setStarsRating((float)$movieAr["rating"]);
    $arrayMovies[] = $movie;
}

require "view/index.view.php";