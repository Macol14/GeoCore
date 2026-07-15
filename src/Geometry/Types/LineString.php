<?php

declare(strict_types=1);

namespace MCL\GeoCore\Geometry;

final readonly class Line
{
    public function __construct(
        public Point $start,
        public Point $end
    ) {
    }
}