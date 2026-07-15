<?php

declare(strict_types=1);

namespace MCL\GeoCore\Geometry;

final readonly class Polygon
{
    public function __construct(
        public array $vertices
    ) {
    }
}