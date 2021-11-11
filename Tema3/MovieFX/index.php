<?php
declare(strict_types=1);
setcookie ("last_visit_date", (string) time(), time() + 604800);

if(isset($_COOKIE['last_visit_date'])) {
    $seconds = $_COOKIE["last_visit_date"];
    if (filter_var($seconds,FILTER_VALIDATE_INT)) {
        $message = "Benvingut,  la seua ultima visita ha sigut: ".date("d/m/Y H:i:s", (int)$seconds);
    } else {
        $message = "Has modificat manualment la cookie de last_visit_date.";
    }

} else {
    $message = "Benvingut!";
}

session_start();

$visits = $_SESSION["visits"]??[];

if (!empty($visits)) {
    $messageSession = "<ul><li>". implode("</li><li>", array_map(function ($v) {
        return date ("d/m/Y H:i:s", $v);
        }, $visits)) . "</li></ul>";
} else {
    $messageSession = "Benvingut! (versió sessió)!";
}

$_SESSION["visits"][] = time();

require "src/Movie.php";
require "src/User.php";

echo "<p>$message</p>";

echo "<p>$messageSession</p>";

    $pdo = new PDO("mysql:host=localhost;dbname=moviefx;charset=utf8", "dbuser", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$moviesStmt = $pdo->prepare("SELECT * FROM movie");
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
    $movies[] = $movie;
}

echo "La pel·lícula {$movie->getTitle()} té una valoració de {$movie->getStarsRating()}";

$user = new User(1, "Salva");

$value = $movie->getStarsRating();

echo "<p>L'usuari {$user->getUsername()} la valora en $value punts</p>";

$user->rate($movie, (int)$value);

echo "<p>La pel·lícula {$movie->getTitle()} té ara una valoració de {$movie->getStarsRating()}</p>";

require "view/index.view.php";