<?php

class LoadFiles {
	
	private $folders;

	function __construct(){
		spl_autoload_register([$this,'folder']);
	}

	function folder($file){
		$this->folders = [
			'frame/controller/'.$file.'.php',
			'frame/database/'.$file.'.php',
			'frame/model/'.$file.'.php',
			'frame/view/'.$file.'.php',
			'frame/view/viewAluno/'.$file.'.php',
			'frame/view/viewCurso/'.$file.'.php'
		];

		foreach ($this->folders as $f) {
			if(file_exists($f)){
				require_once $f;
			}
		}
	}
}

new loadFiles;