<div class='areaInsercao'>
  <form method='post'>
    <h4>Novo Curso</h4>
    <br>
    <div class='form-group'>
      <label for='exampleInputText1'>Nome Curso</label>
      <input name='nome' type='text' class='form-control' id='exampleInputText1' aria-describedby='textHelp' placeholder='Enter Name Couse'>
    </div>
    <div class='form-group'>
      <label for='exampleInputNumber1'>Duração</label>
      <input name='duracao' type='text' class='form-control' id='exampleInputNumber1' aria-describedby='numberlHelp' placeholder='Enter duration in minutes'>
    </div>
    <input name='cadastrar' type='submit' class='btn btn-primary btn-sm' value='Cadastrar'>
   </form>

<?php

if (@$_POST['cadastrar']) {
  $control = new Controller;

  $data = array(
    'nome'=>$_POST['nome'],
    'duracao'=>(string)$_POST['duracao']
  );

  $control->action('addCurso', $data);
}
?>

</div>
