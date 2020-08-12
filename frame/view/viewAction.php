<?php
class viewAction{
	function __construct($action, $data=null){

		if ($action == 'Aluno_ja_existe') {
			echo "<br>.
				<div cla.ss='alert alert-warning' role='alert'>
						O Aluno já esta cadastrado!
				</div>";
		}

		if ($action == 'aluno_cadastrado') {
			echo "<br>
				<div class='alert alert-success' role='alert'>
					Aluno cadastrado!
				</div>";
		}

		if ($action == 'erro_ao_cadastrar') {
			echo "<br>
				<div class='alert alert-danger' role='alert'>
					Erro ao cadastrar, tente novamente mais tarde!
				</div>";
		}

		if ($action == 'verAlunos') {
	
			echo "
				<div class='areaLeitura'>
				  <table class='table table-hover table-sm'>
				    <thead>
				      <tr>
				        <th># MTR</th>
				        <th>Nome</th>
				        <th>Email</th>
				        <th>Curso</th>
				      </tr>
				    </thead>";

			foreach ($data as $d) {
				echo "
				    <tbody>
				      <tr>
				        <th scope='row'>{$d['mtr']}</th>
				        <td>{$d['nome']}</td>
				        <td>{$d['email']}</td>
				        <td>{$d['curso']}</td>
				      </tr>
				    </tbody>";

			}
			echo "
				  </table>
					</div>";
		}

		if ($action == 'curso_ja_existe') {
			echo "<br>
				<div class='alert alert-warning' role='alert'>
					O Course já esta cadastrado!
				</div>";
		}

		if ($action == 'curso_cadastrado') {
			echo "<br>
				<div class='alert alert-success' role='alert'>
					Course cadastrado!
				</div>";
		}

		if ($action == 'verCursos') {
	
			echo "
				<div class='areaLeitura'>
				  <table class='table table-hover table-sm'>
				    <thead>
				      <tr>
				        <th>#ID</th>
				        <th>Nome</th>
				        <th>Duração</th>
				        <th>Manipular</th>
				      </tr>
				    </thead>";
			
			foreach ($data as $d) {
				echo "
				    <tbody>
				      <tr>
				        <th scope='row'>{$d['id']}</th>
				        <td>{$d['nome']}</td>
				        <td>{$d['duracao']}</td>
				        <td>
					        <input type='submit' name='editar' value='Editar' class='btn btn-warning btn-sm'>
					        <input type='submit' name='deletar' value='Deletar' class='btn btn-danger btn-sm'>
						</td>
				      </tr>
				    </tbody>";
			}
			echo "
				  </table>
					</div>";
		}

		if ($action == 'senhas_divergentes') {
			echo "<br>
				<div class='alert alert-success' role='alert'>
					As senhas não coencidem!
				</div>";
		}

	}
}