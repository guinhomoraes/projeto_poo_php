<?php

require 'Pessoa.php';

class Programador extends Pessoa
{

    private $linguagemFavorita;
    private $nivel;

    public function __construct($nome, $email, $linguagem, $nivel)
    {
        $this->setLinguagemFavorita($linguagem);
        $this->setNivel($nivel);
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setLinguagemFavorita($linguagem)
    {
        $this->linguagemFavorita = $linguagem;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getLinguagemFavorita()
    {
        echo "Liguagem Favorita: ".$this->linguagemFavorita;
    }

    public function getNivel()
    {
        echo "Nivel: ".$this->nivel;
    }

}