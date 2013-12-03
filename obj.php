<?php

//modelo/ estrutura / descritor => objeto
/*
class Pessoa{
	//propriedade public, protected, private
	public $nome;
	public $idade;
	public $sexo;
}

// criando uma instancia do objeto.
$bruno = new Pessoa();

//setters
//para nome, idade, sexo

$bruno->nome = "Bruno";
$bruno->idade = 33;
$bruno->sexo = "masculino";

echo " O Bruno tem {$bruno->idade} anos";

*/

class Animal {
	public $pernas;
	public $cor;
	public $asas;

}

class Cachorro {
	public $raca;
	public $cor;
}

class Gato {
	public $raca;
	public $cor;
}


class Endereco {
	public $tipoLogradouro
	public $numero
	public $bairro
	public $cidade
	public $estado

}