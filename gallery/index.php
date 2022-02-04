<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/gallery-styles.css">
</head>

<body>
    <a href="load-page.php">Загрузка фото</a><br>



    <!--ФОРМА ДЛЯ УДАЛЕНИЯ-->
    <form method="POST" action="php-logics/delete-photo.php">

        <?php include 'php-logics/load-photo.php' // СТРАНИЦА ЗАГРУЗКИ ФОТО
        ?>


        <div class="container">
            <input type="checkbox" name="delAll"><label>Удалить всё</label>
        </div>

        <div class="forDelButton">
            <button type="submit" class="delButton">Удалить</button>
        </div>

    </form>




    <!--  //echo $wimage; // выводим полученный результат
    /* echo '<br>';
    $name = $_FILES['image']['name'];
    echo "Файл $name был загружен: " . date("F d Y H:i:s.", filectime($name));
    echo '<br>'; */ -->


</body>

</html>