<?php
namespace Controller;

use Core\BaseController;

/**
 * Home Controller
 */
class MessagesController extends BaseController{

  public function indexAction()
  {
    $this->render('index.html.twig');
  }
}
