<?php

// Crie uma classe chamada Contact que represente um contato.

// A classe Contact deve ter os seguintes atributos:

// name: nome do contato.

// email: endereço de e-mail do contato.

// phone: número de telefone do contato.

// A classe Contact deve ter os seguintes métodos:

// getName(): retorna o nome do contato.

// getEmail(): retorna o endereço de e-mail do contato.

// getPhone(): retorna o número de telefone do contato.

// setEmail($email): atualiza o endereço de e-mail do contato.

// setPhone($phone): atualiza o número de telefone do contato.

class Contact {
 private $name;
 private $email;
 private $phone;

 public function __construct(string $name, string $email, string $phone) {
  $this->name = $name;
  $this->email = $email;
  $this->phone = $phone;
 }

 public function getName(){
  return $this->name;
 }

 public function getEmail(){
  return $this->email;
 }

  public function getPhone(){
  return $this->phone;
 }

 public function setEmail($email){
  $this->email = $email;
 }

 public function setPhone($phone){
  $this->phone = $phone;
 }
}

$pessoa = new Contact("Tiago Oliveira", "ago.tsilva@gmail.com", "61996154803");

echo "Nome: ". $pessoa->getName() . "<br>";
echo "Email: ". $pessoa->getEmail() . "<br>";
echo "Telefone: ". $pessoa->getPhone() . "<br>";
echo "######################################### <br>";


$pessoa -> setEmail("tiagotrance3@hotmail.com");

echo "Nome: ". $pessoa->getName() . "<br>";
echo "Email: ". $pessoa->getEmail() . "<br>";
echo "Telefone: ". $pessoa->getPhone() . "<br>";