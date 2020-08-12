<?php

class Course {
	private $con;

	function __construct(){
		$this->con = new Connection();
		$this->con = $this->con->connect();
	}
	
	function addCurso($data){
		//VERIFICAR SE JÁ NÃO EXISTE O Course NO BANCO
		if ($this->readCurso_addCurso($data)=='existe'){
			$viewAct = new viewAction('curso_ja_existe');
		}else{

			@$nome = $data['nome'];
			@$duracao = $data['duracao'];		
			$sql = 'INSERT INTO cursos (nome, duracao) VALUES (:nome, :duracao)';
			$stmt = $this->con->prepare($sql);
			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':duracao', $duracao);

			//APARECERÁ UMA MENSAGEM FORMATADA PARA CADA UM DOS 2 CASOS
			if ($stmt->execute()) {
				$viewAct = new viewAction('curso_cadastrado');
			} else {
				$viewAct = new viewAction('erro_ao_cadastrar');
			}
		}
	}
	
	function readCurso_addCurso($data){
		$nome = $data['nome'];
		$sql = "SELECT * FROM cursos WHERE nome = :nome";
		$stmt = $this->con->prepare($sql);
		
		$stmt->bindParam(':nome',$nome);
		$stmt->execute();

		$result = $stmt->rowCount();
		if ($result>0) {
			return 'existe';
		}
	}

	function verTodosCursos(){
		$sql = 'SELECT * FROM cursos';
		$stmt = $this->con->prepare($sql);

		if ($stmt->execute()) {
			$result = $stmt->fetchAll();
			$viewAct = new viewAction('verCursos',$result);
		}
	}
}

