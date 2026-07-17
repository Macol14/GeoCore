<?php

require '../vendor/autoload.php';

use MCL\GeoCore\Map\Map;

echo Map::make()

    ->martin()

    ->center(16.7516,-93.1167)

    ->zoom(11)

    ->layer('seccion')

    ->render();