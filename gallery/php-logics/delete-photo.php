<?php
/////////ЛОГИКА ДЛЯ УДАЛЕНИЯ БЫБРАННЫХ ФОТО////////////////////////////////////

/* if (isset($_POST['delImgs'])) {

    $delImgs = $_POST['delImgs'];
    foreach ($delImgs as $delImg) { // для каждого выбранного поля

        unlink($fimg); //удалить выбранное фото
    }
} */
$selectedPhoto = $_POST['delImgs'];

if (isset($fimg)) {

    foreach ($selectedPhoto as $deletedPhoto) {
        unlink($deletedPhoto);
    }
}
