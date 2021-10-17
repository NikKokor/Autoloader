<?php
function Autoloader(string $name_class) {
    $path = str_replace('Car\\', DIRECTORY_SEPARATOR, $name_class);
    require_once __DIR__ . "/src/$path.php";
}
spl_autoload_register('Autoloader');

$Car1 = new \Car\Car("о364ек");
$Car2 = new \Car\Speed_up_down("в953ро");

echo $Car1->getNum();
echo $Car1->getSpeed();
echo $Car2->getNum();
echo $Car2->getSpeed();
echo $Car2->speed_up(4);
echo $Car2->getSpeed();
echo $Car2->speed_down(2);
echo $Car2->getSpeed();
echo $Car2->speed_down(2);
echo $Car2->getSpeed();