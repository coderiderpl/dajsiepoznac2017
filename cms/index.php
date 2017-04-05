<?php

include $_SERVER['DOCUMENT_ROOT'] . '/cms/src/bootstrap.php';

$router = new \CodeRider\NewSiteCms\Routing\Router($_SERVER['REQUEST_URI']);
if ($router->getAll($collection)) {
  
  $controller = $router->getController();
  $method = $router->getMethod();
  $params = $router->getParams();
# Run
  $run = 'CodeRider\\NewSiteCms\\Controllers\\' . $controller;
  $app = new $run;
  $app->$method($params);
  exit;
  
} else {
  echo 'Niestety, aplikacja nie posiada takiego adresu URL w bazie.<br />';
  echo '<a href="'.BASE_URL.'">Powrót na stronę główną CMS</a>';
  exit;
}
