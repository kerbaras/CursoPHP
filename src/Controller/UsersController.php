<?php
namespace Controller;

use Core\BaseController;

/**
 * Home Controller
 */
class UsersController extends BaseController{

  public function indexAction()
  {
    $this->render('index.html.twig');
  }
}
