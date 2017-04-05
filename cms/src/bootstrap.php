<?php

session_start();
define('BASE_URL', '/cms');
define('BASE_URL_REGEXP', str_replace('/', '\/', BASE_URL));

if (!isset($_SESSION['EDIT-lang']) || empty($_SESSION['EDIT-lang'])) {
  $_SESSION['EDIT-lang'] = 'pl';
}

include $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$collection = new \CodeRider\NewSiteCms\Routing\Collector();

$collection->collect(BASE_URL . '/login/', 'Account', 'login');