<?php

declare(strict_types=1);

namespace MCL\GeoCore\Renderer;

use MCL\GeoCore\Map\Map;

final class JsonRenderer
{
    public function render(Map $map): string
    {
        return json_encode([
            'style' => $map->style(),
            'bounds' => $map->bounds(),
        ], JSON_PRETTY_PRINT);
    }
}