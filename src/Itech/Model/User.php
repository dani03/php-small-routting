<?php

class User {


  private $id ;
  private $email;
  private $lastName;
  private $firstName;
  private $password;

  public function getId(){
    return $this->id;

  }
  public function getEmail(){
    return $this->email;
    
  }
  public function getLastName(){
    return $this->lastName;
  }
  public function setLastName(string $name){
    $this->lastName = $name;
    return $this->lastName;
  }
  public function getFirstName(){
    return  $this->firstName;
  }
  public function setFirstName(){

  }
  public function setEmail(){

  }

  
  

}