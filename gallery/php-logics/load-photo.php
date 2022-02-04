<?php    // ВЫВОДИТ ИЗОБРАЖЕНИЯ ИЗ СЕРВЕРА НА ГЛАВНУЮ СТРАНИЦУ
$wimage = "";
$fimg = "";
$path = "upload/"; // задаем путь до сканируемой папки с изображениями
$images = scandir($path); // сканируем папку
?>
<?php if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
?>
    <?php if (is_array($images)) { // если изображения найдены
    ?>
        <?php foreach ($images as $image) {
            // делаем проход по массиву
        ?>



            <figure>
                <!--НА СЛЕДУЮЩЕЙ СТРОКЕ ОШИБКА-->
                <img src="<?= $path .   htmlspecialchars(urlencode($image)) ?>" alt="<?= $image ?>" />
                <!--отображаем картинку-->
                <p>Файл <?= $image ?> был загружен: <?= date("F d Y H:i:s.", filectime($image)) ?></p>
                <?php $fimg = $path .   htmlspecialchars(urlencode($image)) ?>

                <?php var_dump($image); ?>

                <div class="container">


                    <input type="checkbox" name="delImgs[]" value="<?= $path . $image ?>"><label>Удалить</label>


                </div>
            </figure>
        <?php } ?>

    <?php } ?>
<?php } ?>