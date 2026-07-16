<?php

declare(strict_types=1);

namespace Tests\Map;

use MCL\GeoCore\Map\Map;
use PHPUnit\Framework\TestCase;

final class MapTest extends TestCase
{
    public function testCanCreateMap(): void
    {
        $map = new Map();

        $this->assertInstanceOf(
            Map::class,
            $map
        );
    }
}