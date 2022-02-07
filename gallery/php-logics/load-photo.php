<?php
$wayForDel = [];
$wimage = "";
$fimg = "";
$path = "upload/";
$images = scandir($path);
?>
<?php if ($images !== false) {

    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images);
?>
    <?php if (is_array($images)) {

    ?>
        <?php foreach ($images as $image) {



            if ($_FILES[$image]['size'] < 2 * 1024 * 1024) {



        ?>



                <figure>

                    <img src="<?= $path . htmlspecialchars($image) ?>" alt="<?= $image ?>" />

                    <p>Файл <?= $image ?> был загружен: <?= date("F d Y H:i:s.", filectime($path . htmlspecialchars($image))); ?></p>
                    <?php $fimg = $path .   htmlspecialchars($image) ?>

                    <?php var_dump($image); ?>


                    <?php $wayForDel[] = $path . $image . ';' ?>


                    <div class="container">


                        <input type="checkbox" name="delImgs[]" value="<?= $path . $image ?>"><label>Удалить</label>


                    </div>
                </figure>
            <?php } else {
                echo 'Ошибка!' . '<br>' . 'Размер загружаемого файла превышает 2 Мб ';
                return false;
            } ?>


            <input type="hidden" name="delAllImg[]" value="<?php foreach ($wayForDel as $x) {
                                                                echo $x;
                                                            } ?>">
        <?php } ?>
<?php
    } else {
        echo 'Есть ошибки при сканировании папки';
    }
} ?>