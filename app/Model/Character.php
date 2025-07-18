<?php

namespace app\Model;

class Character
{
  private int $id;
  private string $name;
  private string $class;

  public function __construct(
    int $id, 
    string $name, 
    string $class,
  ){
    $this->id = $id;
    $this->name = $name;
    $this->class = $class;
  }

  public function getId() : string 
  {
    return $this->id;
  }

  public function getName() : string 
  {
    return $this->name;
  }

  public function getClass() : string 
  {
    return $this->class;
  }
  
}