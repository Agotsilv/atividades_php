<?php 

class Calculadora {
 public function soma($a, $b){
  echo "A soma é: " . $a + $b . "<br>" ;
 }

  public function subtrair($a, $b){
  echo "A subtração é: " . $a - $b . "<br>" ;
 }

  public function multiplicar($a, $b){
  echo "A multiplicação é: " . $a * $b . "<br>" ;
 }


   public function dividir($a, $b){
  echo "A dividisão é: " . $a / $b . "<br>"; 
 }

}


$resultado = new Calculadora;

$resultado -> soma(5, 3);
$resultado -> subtrair(5, 3);
$resultado -> multiplicar(5, 3);
$resultado -> dividir(5, 3);