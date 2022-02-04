<?php
/////////ЛОГИКА ДЛЯ УДАЛЕНИЯ БЫБРАННЫХ ФОТО////////////////////////////////////

/* if (isset($_POST['delImgs'])) {

    $delImgs = $_POST['delImgs'];
    foreach ($delImgs as $delImg) { // для каждого выбранного поля

        unlink($fimg); //удалить выбранное фото
    }
} */





if (isset($_POST['delImgs'])) {
    $selectedPhoto = $_POST['delImgs'];
    foreach ($selectedPhoto as $deletedPhoto) {
        var_dump('/' . $deletedPhoto);
        unlink($deletedPhoto);
    }
}
