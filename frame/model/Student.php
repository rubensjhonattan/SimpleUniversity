<?php

class Student {
	private $connect;

	function __construct(){
		$this->connect = new Connection();
		$this->connect = $this->connect->connect();
	}

	function addStudent($data)
	{	
		if ($this->validateStudentExist($data))
		{
			$viewAct = new viewAction('Aluno_ja_existe');
		} else
		{
			@$nome = $data['nome'];
			@$cpf = $data['cpf'];
			@$email = $data['email'];
			@$course = $data['curso'];
			@$senha = $data['senha'];		
		
			$sql = 'INSERT INTO alunos (nome, cpf, email, curso, senha) VALUES (:nome, :cpf, :email, :curso, :senha)';
			
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':cpf', $cpf);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':curso', $course);
			$stmt->bindParam(':senha', $senha);

			if ($stmt->execute())
			{
				$viewAct = new viewAction('aluno_cadastrado');
			} else 
			{
				$viewAct = new viewAction('erro_ao_cadastrar');
			}
		}
	}

	function validateStudentExist($data)
	{
		@$cpf = $data['cpf'];
		$sql = 'SELECT cpf FROM alunos WHERE cpf = :cpf';
		$stmt = $this->connect->prepare($sql);
		$stmt->bindParam(':cpf', $cpf);

		if ($stmt->execute())
		{
			return true;
		}
	}
	
	function listStudent($data)
	{
		if ($stmt->execute()) {
			$result = $stmt->fetchAll();
			$viewAct = new viewAction('verAlunos',$result);
		} else 
		{
			$viewAct = new viewAction('erro_ao_cadastrar');
		}
	}

	function viewAllStudents()
	{
		$sql = 'SELECT mtr, cpf, nome, email, curso FROM alunos';
		$stmt = $this->connect->prepare($sql);

		if ($stmt->execute()) {
			$result = $stmt->fetchAll();
			$viewAct = new viewAction('verAlunos',$result);
		} 
		else 
		{
			echo "LKJ";
			//$viewAct = new viewAction('erro_ao_consultar');
		}
	}
	
	function addCourse($data){
		
		if ($this->readCourse_addCourse($data)){
			$viewAct = new viewAction('curso_ja_existe');
		}else{
			@$nome = $data['nome'];
			@$duracao = $data['duracao'];		
			$sql = 'INSERT INTO cursos (nome, duracao) VALUES (:nome, :duracao)';
			$stmt = $this->connect->prepare($sql);
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
}