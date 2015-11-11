<?php
namespace Core;

/**
 * Base Controller
 */
class BaseController{

  protected $container;

  public function __construct($container)
  {
    $this->container = $container;
  }

  protected function get($key){
    return $this->container[$key];
  }

  protected function getTwig(){
    return $this->get('Twig');
  }

  protected function getDB(){
    return $this->get('DB');
  }

  protected function render($file, $args = array())
  {
    return $this->getTwig()->render($file, $args);
  }

}
