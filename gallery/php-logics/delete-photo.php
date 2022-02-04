<?php
/////////ЛОГИКА ДЛЯ УДАЛЕНИЯ БЫБРАННЫХ ФОТО////////////////////////////////////

/* if (isset($_POST['delImgs'])) {

    $delImgs = $_POST['delImgs'];
    foreach ($delImgs as $delImg) { // для каждого выбранного поля

        unlink($fimg); //удалить выбранное фото
    }
} */



//УДАЛЯЕТ ОТДЕЛЬНО ВЫБРАННУЮ КАРТИНКУ - РАБОТАЕТ
/* 
if (isset($_POST['delImgs'])) { // если установлено значение
    $selectedPhoto = $_POST['delImgs'];
    foreach ($selectedPhoto as $deletedPhoto) { // для каждого элемента 
        var_dump('../' . $deletedPhoto); // покажи, что за элемент
        unlink('../' . $deletedPhoto); // удали его
    }
}
 */




/* 
echo '<pre>';
var_dump(explode(';', $_POST['delAllImg'][0]));
echo '<pre>'; */


// присваиваем массив адресов переменной
$adressMessage = (explode(';', $_POST['delAllImg'][0]));


// "УДАЛИТЬ ВСЁ"
if (isset($_POST['delAll'])) { // ЕСЛИ УКАЗАЗАНО УДАЛИТЬ ВСЁ
    foreach ($adressMessage as $delImg) {
        var_dump($delImg);
        echo '<br>';
        unlink('../' . $delImg);      // УДАЛИТЬ ВСЕ КАРТИНКИ
    }
}




/* // "УДАЛИТЬ ВСЁ"
if (isset($_POST['delAllImg'])) {  // усли выбрано удалить всё
    $selectedPhoto = $_POST['delImgs[]']; //выбираем весь массив
    foreach ($selectedPhoto as $deletedPhoto) { // для каждого элемента 
        var_dump('/' . $deletedPhoto); // покажи, что за элемент
        unlink('../' . $deletedPhoto); // удали его
    }
} */
