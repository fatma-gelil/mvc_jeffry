<?php
require'functions.php';
//require 'router.php';

class person
{
   public $name;
  public  $age;
  public function breathe()
  {
      echo $this->name.' is breathing';
  }
}
   $person=new person();
   $person->name='fatma';
   $person->age=18;
   dd($person->breathe());


