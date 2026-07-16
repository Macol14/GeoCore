<?php

declare(strict_types=1);

namespace MCL\GeoCore\Map;

final class Map
{
    private string $style =
        'https://basemaps.cartocdn.com/gl/positron-gl-style/style.json';

    private array $bounds = [];

    public function style(): string
    {
        return $this->style;
    }

    public function bounds(): array
    {
        return $this->bounds;
    }

    public function setBounds(array $bounds): self
    {
        $this->bounds = $bounds;

        return $this;
    }
}