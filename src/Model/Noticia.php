<?php
namespace Model;

use User;

/**
 * Post
 */
class Post
{

  private $id;
  private $titulo;
  private $slug;
  private $body;
  private $usuario;
  private $fecha;

  function __construct()
  {
    $this->fecha = new \DateTime();
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
    return $this;
  }

  public function getSlug()
  {
    return $this->slug;
  }

  public function setSlug($slug)
  {
    $this->slug = $slug;
    return $this;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setBody($body)
  {
    $this->body = $body;
    return $this;
  }

  public function getUser(){
    return $this->user;
  }

  public function setUser(User $user)
  {
    $this->user = $user;
    return $this;
  }
}
