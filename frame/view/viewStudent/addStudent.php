
<div class='areaInsercao'>
  <form method='post'>
    <h4>Novo aluno</h4>
    <br>
    <div class='form-group'>
      <label for='exampleInputText1'>Nome</label>
      <input required name='nome' type='text' class='form-control form-control-sm' id='exampleInputText1' aria-describedby='textHelp' placeholder='Enter Name'>
    </div>
    <div class='form-group'>
      <label for='exampleInputText1'>CPF</label>
      <input required name='cpf' type='numeric' class='form-control form-control-sm' id='exampleInputText1' aria-describedby='textHelp' placeholder='Enter CPF'>
    </div>
    <div class='form-group'>
      <label for='exampleInputEmail1'>Email</label>
      <input required name='email' type='email' class='form-control form-control-sm' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>
    </div>
    <div class='form-group'>
    <label for='exampleSelect1'>Curso</label>
    <select name='curso' class='form-control form-control form-control-sm' id='exampleSelect1'>
      <option hidden='Escolha'>Escolha</option>
      <option>Engenharia da Computação</option>
      <option>Ciências da Computação</option>
      <option>Sistemas de Informação</option>
      <option>Análise e Desenvolvimento de Sistemas</option>
      <option>Engenharia de Software</option>
    </select>
    </div>
    <div class='form-group'>
      <label for='exampleInputPassword1'>Senha</label>
      <input required name='senha' type='password' class='form-control form-control-sm' id='exampleInputPassword1' placeholder='Password'>
    </div>
    <div class='form-group'>
      <label for='exampleInputPassword1'>Repetir senha</label>
      <input required name='senha2' type='password' class='form-control form-control-sm' id='exampleInputPassword1' placeholder='Double Check Password'>
    </div>

  <input type='submit' name='cadastrar' class='btn btn-primary btn-sm' value='Cadastrar'>
  </form>
</div>

<?php

if (@$_POST['cadastrar']) {
  $control = new Controller;
  $data = array(
    '.nome'=>$_POST['nome'],
    'cpf'=>$_POST['cpf'],
    'email'=>$_POST['email'],
    'senha'=>$_POST['senha'],
    'senha2'=>$_POST['senha2'],
    'curso'=>$_POST['curso']);
  
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";
    echo "TESTE<br>";

    $control->action('addStudent', $data);

    /*
    if ($_POST['senha']) == ($_POST['senha2'])
    {
      $control->action('addStudent', $data);
    } else
    {
      $viewAct = new viewAction('senhas_divergentes');
    }
    */
}
?>