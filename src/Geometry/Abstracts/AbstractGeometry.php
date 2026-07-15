<?php

declare(strict_types=1);

namespace MCL\GeoCore\Geometry\Abstracts;

use MCL\GeoCore\Geometry\Contracts\GeometryInterface;

abstract readonly class AbstractGeometry implements GeometryInterface
{
    public function isEmpty(): bool
    {
        return false;
    }
}