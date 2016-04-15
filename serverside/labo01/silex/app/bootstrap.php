<?php
require_once __DIR__ . '/../vendor/autoload.php';
$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_sqlite',
        'path'     => __DIR__ .  DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app.db',
    )
));
