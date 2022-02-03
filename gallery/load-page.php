<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load</title>
</head>

<body>
    <header>
        <a href="index.php">На главную страница</a>
        <hr>
    </header>

    <form action="" method="post" enctype="multipart/form-data"><br>
        <input type="file" name="image" multiple accept="image/*,image/jpeg">
        <button type="submit">Загрузить</button>
    </form>
    <?php



    //ЗАГРУЖАЕТ ФАЙЛЫ В КАТАЛОГ СЕРВЕРА 

    if ($_FILES && $_FILES['image']['error'] == UPLOAD_ERR_OK) { // проверка, нет ли ошибок

        $name = "upload/" . $_FILES['image']['name']; // путь к файлу
        $dateLoad = move_uploaded_file($_FILES['image']['tmp_name'], $name); // с буфера перемещаем в каталог сервера
        $dateLoadMessage = 'Файл ' . $name . ' был загружен: ' . filectime($dateLoad);
        echo $dateLoadMessage;
        echo 'Файл загружен';  // одиночная загрузка файлов
        echo '<br>';
    }




    /*   if ($_FILES) {

        foreach ($_FILES["image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["image"]["tmp_name"][$key];
                $name = $_FILES["image"]["name"][$key];
                move_uploaded_file($tmp_name, "$name");
            }
        }
        echo 'Файлы загружены';
    } */
    ?>





    <?php
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    ?>

</body>

</html>