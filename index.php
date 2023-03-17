<?php
require'functions.php';
//require 'router.php';

/*class person
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
   dd($person->breathe());*/
$dsn="mysql:host=localhost;dbname=week2;charset=utf8mb4";
$pdo= new PDO($dsn);
$pdo->prepare("select * from student;");
$statement->excute();
$student=$statement->fetchAll();
dd($student);


