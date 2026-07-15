<?php

declare(strict_types=1);

namespace MCL\GeoCore\Database;

use PDO;
use PDOException;

final class Connection
{
    public static function make(): PDO
    {
        $config = require dirname(__DIR__, 2) . '/config/database.php';

        $dsn = sprintf(
            'pgsql:host=%s;port=%d;dbname=%s',
            $config['host'],
            $config['port'],
            $config['database']
        );

        try {

            return new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );

        } catch (PDOException $e) {

            throw new PDOException(
                'Unable to connect to PostgreSQL: ' . $e->getMessage()
            );

        }
    }
}