<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/gallery-styles.css">
    <!--INSERT FONTS-->
</head>

<body>
    <a href="load.php">Загрузка фото</a><br>

    <?php
    $wimage = "";
    $fimg = "";
    $path = "images/"; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
        $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
        if (is_array($images)) { // если изображения найдены
            foreach ($images as $image) { // делаем проход по массиву



                echo '<figure>';
                $fimg = "<img src='" . $path . htmlspecialchars(urlencode($image)) . "' alt='" . $image . "' />";
                echo '<figcaption>' . $image . '</figcaption>';
                echo '<p>' . "Файл $image был загружен: " . date("F d Y H:i:s.", filectime($image)) . '</p>';
                echo $fimg;
                echo '<div class="container">';

                echo '<form method="POST">';
                echo '<input type="checkbox" name = "delImgs[]" value="' . $image . '">' . '<label>Удалить</label>';
                echo '</form>';


                echo '</div>';
                echo '</figure>';
            }

            $wimage .= $fimg;
        }/*  else { // иначе, если нет изображений
            $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
        }
    } else { // иначе, если директория пуста или произошла ошибка
        $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>"; */
    }
    echo '<div class="container">';
    echo '<input type="checkbox" name = "delAllImg">' . '<label>Удалить всё</label>';
    echo '</div>';


    echo '<div class="forDelButton">';
    echo '<button type="submit" class="delButton">Удалить</button>';
    echo '</div>';


    /////////ЛОГИКА ДЛЯ УДАЛЕНИЯ БЫБРАННЫХ ФОТО////////////////////////////////////

    $delImgs = $_POST['delImg']; // для каждого выбранного поля
    if (isset($delImgs)) {
        foreach ($delImgs as $delImg) {
            //удалить выбранное фото
        }
    }


    /////////////////////////////////////////////////////////////////////////////////
    //echo $wimage; // выводим полученный результат
    /* echo '<br>';
    $name = $_FILES['image']['name'];
    echo "Файл $name был загружен: " . date("F d Y H:i:s.", filectime($name));
    echo '<br>'; */
    ?>

</body>

</html>