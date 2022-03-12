<?php
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="file9.php">
        <p>Введите значения длины и ширины прямоугольника.</p>
        <p>Длина:  <input type="text" name="length" size="6" />
            Ширина:  <input type="text" name="width" size="6" /></p>
        <input type="submit" name="submit" value="ОК" />
    </form>
    <?php
} else {
    $l = $_POST['length'];
    $w = $_POST['width'];
    function recArea($l, $w){
        $area = $l * $w;
        return $area;
    }
    echo "Площадь прямоугольника равна: " . recArea($l, $w);
}