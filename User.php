<?php
class User{
  private $name;
  private $lastname;
  private $email;
  private $password;

  public function setName($_name){
    if (!is_numeric($_name)){
      $this->name = $_name;
    } else {
      echo 'prego inserire un nome valido';
    }
  }

  public function getName(){
    return $this->name;
  }

  public function setLastname($_lastname){
    if (!is_numeric($_lastname)){
      $this->lastname = $_lastname;
    } else {
      echo 'prego inserire un cognome valido';
    }
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function setEmail($_email){
    $this->email = $_email;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setPassword($_password){
    if (strlen($_password) > 3) {
      $this->password = $_password;
    }else {
      echo 'lunghezza della password insufficiente';
    }
  }

  public function getPassword(){
    return $this->password;
  }

}

?>
