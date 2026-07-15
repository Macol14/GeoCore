<?php

declare(strict_types=1);

use MCL\GeoCore\GeoCore;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$core = new GeoCore();

echo "<h1>GeoCore</h1>";

echo "<p><strong>Version:</strong> {$core->version()}</p>";

echo "<h3>PostGIS</h3>";

echo "<pre>";

echo $core->postgisVersion();

echo "</pre>";