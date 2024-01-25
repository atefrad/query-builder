<?php 

require __DIR__ . '/vendor/autoload.php';

$connection1 = MySqlDatabaseConnection::getInstance();

$connection2 = MySqlDatabaseConnection::getInstance();

dd($connection1, $connection2);
