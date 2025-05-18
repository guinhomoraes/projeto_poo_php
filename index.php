<?php

require 'Programador.php';

$novaPessoa = new Programador("Guilherme", "guilherme@gmail.com", "PHP", "Senior");

echo "<pre>";
$novaPessoa->setNivel("Pleno");
print_r($novaPessoa->getNivel());


