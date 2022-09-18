<?php

function badgeUpload()
{
    if (! isset($_POST['badgeUpload'])) {
        return;
    }

    $code = trim(filter_var($_POST['code'], FILTER_SANITIZE_STRING));
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $desc = trim(filter_var($_POST['desc'], FILTER_SANITIZE_STRING));

    if (empty($code) || empty($name) || empty($desc) || ! is_file($_FILES['badge']['tmp_name'])) {
        return Html::error('Tienes que completar todos los campos!');
    }

    if (strlen($code) < 3 || strlen($code) > 32) {
        return Html::error('El código debe tener entre 3 y 32 caracteres.');
    }

    if (ctype_alnum($code) === false) {
        return Html::error('El código solo puede contener letras y números.');
    }

    if (strlen($name) < 3 || strlen($name) > 32) {
        return Html::error('El nombre debe tener entre 3 y 32 caracteres de longitud.');
    }

    if (strlen($desc) < 3 || strlen($desc) > 128) {
        return Html::error('La descripción debe tener entre 3 y 128 caracteres de longitud.');
    }

    $badge = $_FILES['badge'];

    if ($badge['type'] !== 'image/gif') {
        return Html::error('La insignia debe ser un archivo GIF.');
    }

    $size = getimagesize($badge['tmp_name']);

    if ($size[0] > 42 || $size[1] > 42) {
        return Html::error('La insignia debe ser de tamaño 42x42 píxeles.');
    }

    $code   = strtoupper($code);
    $target = "../wwwroot/c_images/album1584/{$code}.gif";

    if (is_file($target)) {
        return Html::error('Esta insignia ya existe. Usa un código diferente.');
    }

    $move = move_uploaded_file($badge['tmp_name'], $target);

    if ($move === false) {
        return Html::error('Algo salió mal!');
    }

    $text = "badge_name_{$code}={$name}\nbadge_desc_{$code}={$desc}\n";
    file_put_contents("../wwwroot/gamedata/textos4.txt", $text, FILE_APPEND);

    global $dbh;

    $query = $dbh->prepare('INSERT INTO badge_upload (`user_id`, `code`, `name`, `desc`) VALUES (?, ?, ?, ?)');
    $query->execute([ User::userData('id'), $code, $name, $desc ]);

    return Html::errorSucces('¡Tu insignia se ha subido correctamente! Codigo de la placa:' .$code);
}





