<?php

require '../vendor/autoload.php';

use MCL\GeoCore\Map\Map;
use MCL\GeoCore\Layer\Layer;

echo Map::make()
   ->layer(

        Layer::make('seccion')

            ->fillColor('#2196F3')

            ->fillOpacity(0.35)

    )
    ->render();