<?php

declare(strict_types=1);

namespace MCL\GeoCore\Layer;

final class Layer
{
    private string $name;

    private string $fillColor = '#0080ff';

    private float $fillOpacity = 0.25;

    private string $type = 'fill';

    private string $outlineColor = '#000000';

    private float $outlineWidth = 1;


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

    public function type(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public static function polygon(string $name): self
    {
        return (new self($name))->type('fill');
    }

    public static function line(string $name): self
    {
        return (new self($name))->type('line');
    }

    public static function point(string $name): self
    {
        return (new self($name))->type('circle');
    }
    
    public function outlineColor(string $color): self
    {
        $this->outlineColor = $color;

        return $this;
    }

    public function outlineWidth(float $width): self
    {
        $this->outlineWidth = $width;

        return $this;
    }
    
    public function toArray(): array
    {
        return [

            'name' => $this->name,

            'type' => $this->type,

            'fillColor' => $this->fillColor,

            'fillOpacity' => $this->fillOpacity,

            'outlineColor' => $this->outlineColor,
            
            'outlineWidth' => $this->outlineWidth

        ];
    }

}