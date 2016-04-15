<?php
require __DIR__ . '/bootstrap.php';
$app->get('/', function(Silex\Application $app) {
    return 'ohai';
});
