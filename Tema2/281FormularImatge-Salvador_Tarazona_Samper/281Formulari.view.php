<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 281: Formulari Imatge</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
</head>

<body>
    <form action="281FormularImatge.php" method="post">
            <pre>
            <?php
            if (!empty($errors))
                print_r($errors)
            ?>
            </pre>
        <div>
            <label for="firstname">Name</label>
            <input type="text" name="firstname" value="<?=$firstname?>">
        </div>
        <div>
            <label for="lastname">Cognoms</label>
            <input type="text" name="lastname" value="<?=$lastname?>">
        </div>
        <div>
            <label for="phone">Telèfon</label>
            <input type="text" name="phone" value="<?=$phone?>">
        </div>
        <div>
            <label for="email">Correu electrònic</label>
            <input type="text" name="email" value="<?=$email?>">
        </div>
        <div>
            <label for="image">Afegir imatge:</label>
            <input type="file" name="file" id="file" />
        </div>
        <div>
            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>

    <?php if (empty($errors) && $isPost): ?>
        <table>
            <tr>
                <th>Nom</th>
                <td><?= $firstname ?></td>
            </tr>
            <tr>
                <th>Cognom</th>
                <td><?= $lastname ?></td>
            </tr>
            <tr>
                <th>Telèfon</th>
                <td><?= $phone ?></td>
            </tr>
            <tr>
                <th>Correu</th>
                <td><?= $email ?></td>
            </tr>
        </table>
    <div>
        <img alt="imatge" src="<?= $image ?>" />">
    </div>
    <?php endif ?>
</body>

</html>