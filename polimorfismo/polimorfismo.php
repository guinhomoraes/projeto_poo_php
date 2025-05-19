<?php

require 'Cachorro.php';
require 'Gato.php';
require_once 'Animal.php';

$meuAnimal = new Animal;
echo $meuAnimal->falar()."<br>";


$meuCao = new Cachorro;
echo $meuCao->falar()."<br>";

$meuGato = new Gato;
echo $meuGato->falar()."<br>";