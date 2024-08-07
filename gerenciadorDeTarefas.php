<?php

class Task{
  private $title;
  private $description;
  private bool $completed;

  public function __construct(string $title, string $description, bool $completed) {
   $this->title = $title;
   $this->description = $description;
   $this->completed = $completed;
  }

  public function markAsCompleted(){
   if($this->completed){
    return  "$this->title realizada com sucesso! <br>";
   }else {
    return  "$this->title não realizado";
   }
  }

  public function markAsIncomplete(){
   $this -> completed = false;
  }

  public function getTitle(){
   return $this->title;
  }

  public function getDescription(){
   return $this->description;
  }

  public function isCompleted(){
   return $this->completed = true;
  }

}

$task = new Task("Php", "Aula POO", true);

echo $task->getTitle() . "<br>";
echo $task->getDescription() . "<br>";
$task->isCompleted();
// $task->markAsIncomplete();

echo $task->markAsCompleted() . "<br>";