<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Humo',
    'action' => 'index'
  ),
  'fil' => array(
    'controller' => 'Humo',
    'action' => 'fil'
  ),
  'detail' => array(
    'controller' => 'Humo',
    'action' => 'detail'
  ),
  'winkelmandje' => array(
    'controller' => 'Humo',
    'action' => 'winkelmandje'
  ),
  'kassa' => array(
    'controller' => 'Humo',
    'action' => 'kassa'
  ),
  'kassastep2' => array(
    'controller' => 'Humo',
    'action' => 'kassastep2'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
