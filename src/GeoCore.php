<?php

declare(strict_types=1);

namespace MCL\GeoCore;

use MCL\GeoCore\Database\Connection;

final class GeoCore
{
    public function version(): string
    {
        return '0.1.0-dev';
    }

    public function postgisVersion(): string
    {
        $pdo = Connection::make();

        return $pdo
            ->query('SELECT PostGIS_Full_Version()')
            ->fetchColumn();
    }
}