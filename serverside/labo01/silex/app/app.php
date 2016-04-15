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
$app->get('/search/', function(Silex\Application $app) {
  $search = isset($_GET['search']) ? $_GET['search'] : '';
  $events = $app['db']->fetchAll('SELECT * FROM concerts WHERE title LIKE ? ORDER BY start_date', array('%'.$search.'%'));
  return $app['twig']->render('main.twig', array(
    'name' => $name,
    'events' => $events,
    'search' => $search
  ));
});
$app->get('/switch/{term}/', function(Silex\Application $app, $term) {
  $app['db']->executeUpdate('UPDATE concerts SET fav = (1 - fav) WHERE id = ?', array($app->escape($term)));
  return '';
  // redirect
});
