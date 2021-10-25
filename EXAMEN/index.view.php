<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Gestor de tasques</title>
</head>
<body>
<?php if (!isPost() || !empty($errors)) : ?>
<h1>Gestor de tasques</h1>
<?php if (!empty($errors)) : ?>
<p>Hi ha errors en processar el formulari: </p>
<ul>
    <?php foreach ($errors as $error) : ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<form action="" method="post">
    <label for="title">
        Titol de la tasca
        <input id="title" name="title" type="text" value="<?= $title ?>" />
    </label>
    <label>
        Descripció de la tasca
        <textarea rows="10" name="descripcio" cols="45"><?= $description ?></textarea>
    </label>
    <label>
        Data de finalització (YYYY-mm-dd)
        <input type="text" name="data" value="<?= $dueDate ?>" />
    </label>
    <p>Prioritat</p>
    <?php foreach ($priorities as $priorityKey => $priorityValue) : ?>
    <label for="priority-<?= $priorityValue ?>">
        <input type="radio" name="priority" value="<?=$priorityValue?>" <?=($priorityKey === $priority)?"checked":""?>>
    </label>
    <?php endforeach ?>
    <div>
        <div>
            <p>Categoria</p>
            <select name="category">
                <option selected disabled value="">(selecciona una categoria)</option>
                <?php sort($categories);?>
                <?php foreach ($categories as $categoryKey => $categoryValue):?>
                <option value="<?=$categoryValue?>" <?= ($categoryValue === $category)?"selected":""?>>
                    <?=$categoryValue?>
                </option>
                <?php endforeach;?>
            </select>
        </div>
        <input type="submit" value="Enviar" />
</form>
<?php endif; ?>
<?php if (empty($errors) && isPost()) : ?>
<h1>Dades de la tasca</h1>
<table>
    <tr>
        <th>Títol</th>
        <td><?= $title ?></td>
    </tr>
    <tr>
        <th>Descripció</th>
        <td><?= $description ?> </td>
    </tr>
    <tr>
        <th>Data de finalització</th>
        <td><?= date("d/m/Y", strToTime($dueDate)) ?></td>
    </tr>
    <tr>
        <th>Categoria</th>
        <td><?= $category ?> </td>
    </tr>
    <tr>
        <th>Prioritat</th>
        <td><?= $priority ?> </td>
    </tr>
</table>
<?php endif; ?>
</body>
</html>
