<?php
require __DIR__ . '/bootstrap.php';
$app->get('/', function(Silex\Application $app) {
  $events = $app['db']->fetchAll('SELECT * from concerts');
  return $app['twig']->render('main.twig', array(
    'name' => $name,
    'events' => $events,
    'search' => $search
  ));
});
