<?php

interface MinhaInterface
{
    public function minhaFuncao();
}


class MinhaClasse implements MinhaInterface
{
    public function minhaFuncao()
    {
        echo "funfou";
    }
}

$meuObjeto = new MinhaClasse;
$meuObjeto->minhaFuncao();