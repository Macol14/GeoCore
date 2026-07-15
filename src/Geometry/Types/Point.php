<?php

declare(strict_types=1);

namespace MCL\GeoCore\Geometry\Types;

use MCL\GeoCore\Geometry\Abstracts\AbstractGeometry;

final readonly class Point extends AbstractGeometry
{
    public function __construct(
        public float $x,
        public float $y,
        public int $srid = 4326
    ) {
    }

    public function type(): string
    {
        return 'Point';
    }

    public function dimensions(): int
    {
        return 2;
    }
}