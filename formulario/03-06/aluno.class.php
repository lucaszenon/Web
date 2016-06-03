<?php
	class Aluno{
		private $nome;
		private $dataNasc;
		private $foto;

		public function __construct($nome, $dataNasc, $foto){
			$this->setNome($nome);
			$this->setDataNasc($dataNasc);
			$this->setFoto($foto);
		}
		//nome
		public function getNome(){
			return $this->nome;
		}
		public function setNome(){
			$this->nome = $nome;
		}
		//Data
		public function getDataNasc(){
			return $this->dataNasc;
		}
		public function setDataNasc($dataNasc){
			$data = explode('/',$dataNasc);
			$this->dataNasc = "$data[2]-$data[1]-$data[0]";
		}
		//foto
		public function getFoto(){
			return $this->foto;
		}
		public function setfoto(){
			$this->foto = $foto;
		}

	}


?>
