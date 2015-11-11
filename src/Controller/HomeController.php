<?php
namespace Controller;

use Core\BaseController;

/**
 * Home Controller
 */
class HomeController extends BaseController{

  public function indexAction()
  {
    $result = $this->getDB()->query("SELECT * FROM noticias");
    $noticias = array();
    foreach ($result->feachAll() as $row) {
      $noticia = new Noticia();
      $noticia->setId($row['id']);
      $noticia->setTitulo($row['titulo']);
      $noticia->setSlug($row['slug']);
      $noticia->setBody($row['cuerpo']);
      $noticia->setFecha(new \DateTime($row['fecha']));
      $r = $this->getDB()->query("SELECT * FROM users WHERE id ='" . $row['fecha'] . "'")->feach();
      $user = new User();
      $user->setId($r['id']);
      $user->setUsername($r['username']);
      $user->setPassword($r['password']);
      $user->setRole(explode($r['roles'], ","));
      $noticia->setUser($user);

      $noticias[] = $noticia;
    }
    return $this->render('Home/index.html.twig', array('noticias' => $noticias));
  }
}
