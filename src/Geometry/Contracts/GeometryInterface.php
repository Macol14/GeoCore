<?php

declare(strict_types=1);

namespace MCL\GeoCore\Geometry\Contracts;

interface GeometryInterface
{
    public function type(): string;

    public function dimensions(): int;

    public function isEmpty(): bool;
}