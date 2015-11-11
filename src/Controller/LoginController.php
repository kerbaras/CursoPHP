<?php
namespace Controller;

use Core\BaseController;

/**
 * Home Controller
 */
class LoginController extends BaseController{

  public function indexAction()
  {
    $this->render('index.html.twig');
  }
}
