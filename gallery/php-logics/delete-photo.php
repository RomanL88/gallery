<?php

if (isset($_POST['delImgs'])) {
    $selectedPhoto = $_POST['delImgs'];
    foreach ($selectedPhoto as $deletedPhoto) {
        var_dump('../' . $deletedPhoto);
        unlink('../' . $deletedPhoto);
    }
}

echo '<pre>';

$countImg = (count($_POST['delAllImg']) - 1);

echo '<pre>';

$adressMessage = (explode(';', $_POST['delAllImg'][$countImg]));
var_dump($adressMessage);

if (isset($_POST['delAll'])) {
    foreach ($adressMessage as $delImg) {
        var_dump($delImg);
        echo '<br>';
        unlink('../' . $delImg);
    }
}
