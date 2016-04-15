<?php
require __DIR__ . '/bootstrap.php';
$app->get('/', function(Silex\Application $app) {
    return 'ohai';
});
$app->get('/dikke-memes/', function(Silex\Application $app) {
    return 'bram';
});

$app->get('/hello/{name}', function ($name) use ($app) {
  $events = $app['db']->fetchAll('SELECT * from concerts');
  return $app['twig']->render('hello.twig', array(
    'name' => $name,
  ));
});
