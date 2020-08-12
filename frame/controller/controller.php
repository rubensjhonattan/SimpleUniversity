<?php

class Controller{
	private $url, $modulo, $acao;
	private $view, $student;

	function __construct()
	{
		$this->modulo = @$_GET['modulo'];
		$this->acao = @$_GET['acao'];
		$this->url = "{$this->modulo}/{$this->acao}.php";

		if ($this->modulo == 'viewStudent')
		{
			$this->view = new View($this->url);
		}

		if ($this->modulo == 'viewCourse')
		{
			$this->view = new View($this->url);
		}
	}

	function action($action, $data=null){
		if ($action == 'addStudent') {
			$student = new Student();
			$student->addStudent($data);
		}

		if ($action == 'viewStudent') {
			$student = new Student();
			$student->viewStudent($data);
		}

		if ($action == 'viewAllStudents') {
			$student = new Student();
			$student->viewAllStudents();
		}

		if ($action == 'addCourse') {
			$course = new Course();
			$course->addCourse($data);
		}

		if ($action == 'viewAllCourse') {
			$course = new Course();
			$course->viewAllCourse();
		}
	}  
}