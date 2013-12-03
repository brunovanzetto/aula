<?php

require 'pessoa.php';

class Aluno extends Pessoa {
	private $numMatricula;
	private $curso;

	public function setNumMatricula($numMatricula){
		$this ->numMatricula = $numMatricula;
	}

	public function setCurso($curso){
		$this ->curso = $curso;
	}
	public function getNumMatricula(){
		return $this->numMatricula;
	}
	public function getCurso(){
		return $this->curso;
	}


}