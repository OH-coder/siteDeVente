<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';
$factory=new Dotenv\Environment\DotenvFactory([
new Dotenv\Environment\Adapter\EnvConstAdapter(),
new Dotenv\Environment\Adapter\PutenvAdapter(),
]);
$dotenv= \Dotenv\Dotenv::create(BASE_PATH,null,$factory);
$dotenv->load();

//\Dotenv\Dotenv::create(BASE_PATH)->load();


