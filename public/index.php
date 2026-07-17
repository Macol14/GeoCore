<?php

require '../vendor/autoload.php';

use MCL\GeoCore\Map\Map;

echo Map::make()
    ->layer('seccion')
    ->render();