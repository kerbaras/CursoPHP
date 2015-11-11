<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Controller\HomeController;

try {

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/View');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../app/cache',
));

$config = json_decode(file_get_contents( __DIR__ . '/../app/config.json' ));
$db = new PDO('mysql:host='. $config->database->host . ';dbname=' . $config->database->dbname, $config->database->user, $config->database->password);

$container = array(
                    'Twig' => $twig,
                    'DB' => $db
                  );

$controller = new HomeController($container);
echo($controller->indexAction());

} catch (Exception $e) {
  die(var_dump($e));
}
