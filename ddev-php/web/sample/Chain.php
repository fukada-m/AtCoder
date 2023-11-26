<?php
  class Chain
  {
    private $name;
    
    public function __construct($name){
      $this->name = $name;
    }

    public function showThis()
    {
        return $this;
    }

  }

$chain = new Chain("test");
var_dump($chain->showThis());