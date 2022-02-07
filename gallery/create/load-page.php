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
        <a href="../index.php">На главную страница</a>
        <hr>
    </header>

    <form action="" method="post" enctype="multipart/form-data"><br>
        <input type="file" name="image[]" multiple accept="image/*,image/jpeg"><br>
        <button type="submit">Загрузить</button>
    </form>
    <?php

    if ($_FILES) {

        foreach ($_FILES["image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                if (count($_FILES["image"]['name']) > 0 && count($_FILES["image"]['name']) < 5) {

                    $tmp_name = $_FILES["image"]["tmp_name"][$key];
                    $fileDir = "../upload/";
                    $name = $_FILES["image"]["name"][$key];


                    $result = preg_replace('~^[a-zA-Z0-9_-]*$~', '_', $name);
                    var_dump($result);


                    move_uploaded_file($tmp_name, $fileDir . $name);
                    echo 'Файл ' . $name . ' был загружен: ' . filectime($dateLoad) . PHP_EOL;
                } else {

                    echo 'Кол-во изображений должно быть от 1 до 5!';
                    return false;
                }
            }
        }
        echo 'Файлы загружены';
    }
    ?>





    <?php
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    ?>

</body>

</html>