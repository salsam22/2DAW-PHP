<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 265: Formulari</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Vicent Jordà">
    <style>
        body {
            font-family: "Bitstream Vera Serif"
        }
    </style>
</head>

<body>
<form method="post" enctype="multipart/form-data">
        <pre>
        <?php
        if (!empty($errors))
            print_r($errors)
        ?>
        </pre>
    <div>
        <label for="firstname">Name</label>
        <input id="firstname" type="text" name="firstname" value="<?= $firstname ?>">
    </div>
    <div>
        <label for="lastname">Cognoms</label>
        <input id="lastname" type="text" name="lastname" value="<?= $lastname ?>">
    </div>
    <div>
        <label for="phone">Telèfon</label>
        <input id="phone" type="text" name="phone" value="<?= $phone ?>">
    </div>
    <div>
        <label for="email">Correu electrònic</label>
        <input id="email" type="text" name="email" value="<?= $email ?>">
    </div>

    <div>
        <label for="genre">Genere</label><br>
        <?php foreach ($genre1 as $genere): ?>
            <input type="radio" name="genre" value="<?= $genere ?>"
                <?php if ($genere == $genre) {
                    echo "checked";
                } ?>
            />
            <label for="genere"><?= $genere ?></label>
        <?php endforeach; ?>
    </div>

    <div>
        <label for="hobbies">Hobbies:</label><br>
        <?php foreach ($hobbies1 as $hobbie): ?>
            <input type="checkbox" name="hobbies[]" value="<?= $hobbie ?>"

                <?php if (is_selected($hobbie, $hobbies)) {
                    echo "checked";
                } ?>>
            <label for="hobbies"><?= $hobbie ?></label>
        <?php endforeach; ?>
    </div>
    <div>
        <select multiple="multiple" name="contact_time[]">
            <?php foreach ($contact_time1 as $time): ?>
                <option value="<?= $time ?>" <?= is_selected($time, $contact_time)?"selected":""; ?>>
                <label for="contact_time"><?= $time ?></label>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="image">Afegir imatge:</label>
        <input type="file" name="imagen" />
    </div>
    <div>
        <input type="submit" value="Enviar">
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
            <th>Genere</th>
            <td><?= $genre ?></td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td><?php foreach ($hobbies as $hobbie): ?>
                    <p><?= $hobbie ?></p>
                <?php endforeach; ?>
            </td>
        </tr>

        <tr>
            <th>Contact time</th>
            <td><?php foreach ($contact_time as $contact): ?>
                    <p><?= $contact ?></p>
                <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <th>Correu</th>
            <td><?= $email ?></td>
        </tr>
        <img src="uploads/<?=$rand?>"/>
    </table>
<?php endif ?>
</body>

</html>
