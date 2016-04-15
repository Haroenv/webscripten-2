<?php
  require_once 'vendor/autoload.php';

  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
  $twig = new Twig_Environment($loader);

  $config = new \Doctrine\DBAL\Configuration();
  $connectionParams = array(
    'dbname' => 'concerts',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
    'charset' => 'utf8mb4'
  );
  $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams,$config);

  $search = isset($_GET['search']) ? $_GET['search'] : '';
  $switch = isset($_GET['switch']) ? $_GET['switch'] : '';


  if ($switch !== '') {
    $conn->executeUpdate('UPDATE concerts SET fav = (1 - fav) WHERE id = ?', array($switch));
  }

  if ($search !== '') {
    $concerts = $conn->fetchAll('SELECT * FROM concerts WHERE title LIKE ? ORDER BY start_date', array('%'.$search.'%'));

  } else {
    $concerts = $conn->fetchAll('SELECT * FROM concerts ORDER BY start_date');
  }

  $tpl = $twig->loadTemplate('main.twig');
  echo $tpl->render(array(
    'events' => $concerts,
    'search' => $search
  ));

 ?>
