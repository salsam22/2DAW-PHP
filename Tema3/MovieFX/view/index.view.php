<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MoviesFX</title>
</head>
<body>
<h1>Pel·lícules</h1>
<a href="movies_create.php">Nova pelicula</a>
<?php foreach ($movies as $movie): ?>
    <a href="movie.php?id=<?= $movie->getId() ?>"><p><?= $movie->getTitle() ?></p></a>
<?php endforeach; ?>
</body>
</html>
