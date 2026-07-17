<?php

declare(strict_types=1);

namespace MCL\GeoCore\Map;

use MCL\GeoCore\Renderer\MapLibreRenderer;
use MCL\GeoCore\Layer\Layer;

final class Map
{
    private string $martin = 'http://localhost:3000';

    private string $style = 'https://basemaps.cartocdn.com/gl/positron-gl-style/style.json';

    private array $center = [-93.1167, 16.7516];

    private int $zoom = 11;

    private array $layers = [];

    public static function make(): self
    {
        return new self();
    }

    public function martin(string $url = 'http://localhost:3000'): self
    {
        $this->martin = rtrim($url, '/');

        return $this;
    }

    public function center(float $lat, float $lng): self
    {
        $this->center = [$lng, $lat];

        return $this;
    }

    public function zoom(int $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    public function layer(Layer $layer): self
    {
        $this->layers[] = $layer;

        return $this;
    }
     public function toArray(): array
    {
    return [
        'martin' => $this->martin,
        'style'  => $this->style,
        'center' => $this->center,
        'zoom'   => $this->zoom,
        'layers' => array_map(
            static fn (Layer $layer): array => $layer->toArray(),
            $this->layers
        ),
    ];
}

    public function render(): string
    {
        return (new MapLibreRenderer())->render($this);
    }
}