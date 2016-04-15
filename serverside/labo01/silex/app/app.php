<?php
require __DIR__ . '/bootstrap.php';
$app->get('/', function(Silex\Application $app) {
  $events = $app['db']->fetchAll('SELECT * from concerts ORDER BY start_date');
  return $app['twig']->render('main.twig', array(
    'name' => $name,
    'events' => $events,
    'search' => ''
  ));
});
$app->get('/search/{term}/', function(Silex\Application $app, $term) {
  $events = $app['db']->fetchAll('SELECT * FROM concerts WHERE title LIKE ? ORDER BY start_date', array('%'.$app->escape($term).'%'));
  return $app['twig']->render('main.twig', array(
    'name' => $name,
    'events' => $events,
    'search' => $app->escape($term)
  ));
});
