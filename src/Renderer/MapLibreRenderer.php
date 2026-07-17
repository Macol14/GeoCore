<?php

declare(strict_types=1);

namespace MCL\GeoCore\Renderer;

use MCL\GeoCore\Map\Map;

final class MapLibreRenderer
{
    public function render(Map $map): string
    {
        extract($map->toArray());

        ob_start();

        require __DIR__ . '/templates/map.php';

        return ob_get_clean();
    }
}