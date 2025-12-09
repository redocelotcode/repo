<?php
return [
    'db_host' => 'localhost',
    'db_port' => 5432,
    'db_name' => 'hackcamp',
    'db_user' => 'postgres',
    'db_pass' => '123', // make sure to use your own password
];

/* Use this code to load the local database onto a web page
 *
 * $config = require __DIR__ . '/config.local.php';
 *
 * $dsn = "pgsql:host={$config['db_host']};port={$config['db_port']};dbname={$config['db_name']};";
 *
 * $pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
 *   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 */