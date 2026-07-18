<?php

require '../vendor/autoload.php';

use MCL\GeoCore\Map\Map;
use MCL\GeoCore\Layer\Layer;

// echo Map::make()

//     ->layers(
//         Layer::polygon('distrito_local')
//             ->fillColor('#a709c3'),

//         // Layer::polygon('municipio')
//         //     ->fillColor('#90CAF9'),

//         // Layer::polygon('seccion')
//         //     ->fillColor('#1565C0')
//         //     ->fillOpacity(0.10)
//     )

//     ->render();

echo Map::make()

    ->layer(

        Layer::polygon('municipio')

            ->fillColor('#90CAF9')

            ->fillOpacity(.30)

            ->outlineColor('#0D47A1')

    )

    ->render();