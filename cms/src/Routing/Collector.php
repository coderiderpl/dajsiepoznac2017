<?php

namespace CodeRider\NewSiteCms\Routing;

class Collector {
  
  public function __construct() {
    $this->urls = [];
  }
  
  public function collect(string $url, string $controller, string $method) {
    $this->urls[] = array(
      'url' => $this->prepareUrlForPregMatch($url),
      'controller' => $controller,
      'method' => $method
    );
  }
  
  public function getCollection(): array {
    return $this->urls;
  }
  
  private function prepareUrlForPregMatch($url): string {
    $url = str_replace('/', '\/', $url);
    return $url;
  }
  
}