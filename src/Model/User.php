<?php
namespace Model;

/**
 * User
 */
class User
{

  private $id;
  private $username;
  private $password;
  private $salt;
  private $roles;

  function __construct()
  {
    $this->roles = array();
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setUsername($username)
  {
    $this->username = $username
    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setPassword($password)
  {
    $this->password = $password
    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setSalt($salt)
  {
    $this->salt = $salt
    return $this;
  }

  public function getSalt()
  {
    return $this->salt;
  }

  public function setRoles(array $roles)
  {
    $this->roles = $roles
    return $this;
  }

  public function addRole($role)
  {
    $this->roles[] = $role
    return $this;
  }

  public function removeRole($role)
  {
    $key = array_search($role, $this->roles, true);

    if ($key === false) {
      return false;
    }

    unset($this->roles[$key]);

    return true;
  }

  public function getRoles()
  {
    $roles = $this->roles;
    $roles[] = "ROLE_DEFAULT"
    return $roles;
  }
}
