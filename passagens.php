<?php 





//! Sistema de Reservas de Passagens
//! Crie uma classe chamada Passenger que represente um passageiro.

//! A classe Passenger deve ter os seguintes atributos:

//! name: nome do passageiro.

//! age: idade do passageiro.

//! seatNumber: número do assento do passageiro.

//! A classe Passenger deve ter os seguintes métodos:

//! getName(): retorna o nome do passageiro.

//! getAge(): retorna a idade do passageiro.

//! getSeatNumber(): retorna o número do assento do passageiro.
//! setSeatNumber($seatNumber): atualiza o número do assento do passageiro.



class Passenger {
 private $name;
 private $age;
 private $seatNumber;


 public function __construct(string $name, string $age, int $seatNumber) {
  $this->name = $name;
  $this->age = $age;
  $this->seatNumber = $seatNumber;
 }

 public function getName(){
  return $this->name;
 }

  public function getAge(){
  return $this->age;
 }

 public function setSeatNumber($seatNumber){
  return $this->seatNumber = $seatNumber;
 }

 public function getSeatNumber(){
  return $this->seatNumber;
 }

}


$pessoa = new Passenger("Tiago Oliveira", 26, 265566);

echo "Nome: " . $pessoa->getName() . "<br>";
echo "Idade: " . $pessoa->getAge() . "<br>";
echo "Numero: " . $pessoa->getSeatNumber() . "<br>";


echo "Numero: " . $pessoa->getSeatNumber() . "<br>";


