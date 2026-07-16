<?php

final readonly class MapDocument
{
    public function __construct(
        public array $sources = [],
        public array $layers = [],
        public array $events = []
    ) {}
}