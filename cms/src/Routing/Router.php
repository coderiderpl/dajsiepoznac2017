<?php

namespace CodeRider\NewSiteCms\Routing;

class Router {
  
  public function __construct(string $currentUrl) {
    $this->currentUrl = $currentUrl;
  }
  
  public function getController() {
    return $this->controller;
  }
  
  public function getMethod() {
    return $this->method;
  }
  
  public function getParams() {
    return $this->params;
  }
  
  public function getAll(Collector $collection): bool {
    
    foreach ($collection->getCollection() as $params) {
      $checkPattern = $this->search($params['url']);
      if ($checkPattern) {
        $this->setController($params['controller']);
        $this->setMethod($params['method']);
        array_shift($checkPattern);
        $this->setParams($checkPattern);
        return true;
      }
    }
    return false;
    
  }
  
  private function search($pattern) {
    if (preg_match("/^$pattern$/", $this->currentUrl, $matches)) {
      return $matches;
    }
    return false;
  }
  
  private function setController($controller) {
    $this->controller = $controller;
  }
  
  private function setMethod($method) {
    $this->method = $method;
  }
  
  private function setParams($params) {
    $this->params = $params;
  }
    

}
  
  



