<?php
require_once "../vendor/autoload.php";


use Dotenv\Dotenv;
use app\Core\Dispatcher;
use DI\ContainerBuilder;

session_start();

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();


$builder = new ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/../config/' . $_ENV['DICONFIGFILE']);
$container = $builder->build();

$container->get(Dispatcher::class);
#http://localhost/public/index.php/list