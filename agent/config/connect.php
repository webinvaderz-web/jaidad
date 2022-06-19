<?php

require '../vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();
$host_url = $_ENV['HOST_URL'];


$GLOBALS['server'] = $host_url ;

?>