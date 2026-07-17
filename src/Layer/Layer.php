<?php

declare(strict_types=1);

namespace MCL\GeoCore\Layer;

final class Layer
{
    private string $name;

    private string $fillColor = '#0080ff';

    private float $fillOpacity = 0.25;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function make(string $name): self
    {
        return new self($name);
    }

    public function fillColor(string $color): self
    {
        $this->fillColor = $color;

        return $this;
    }

    public function fillOpacity(float $opacity): self
    {
        $this->fillOpacity = $opacity;

        return $this;
    }

    public function toArray(): array
    {
        return [

            'name' => $this->name,

            'fillColor' => $this->fillColor,

            'fillOpacity' => $this->fillOpacity

        ];
    }
}