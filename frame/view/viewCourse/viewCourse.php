<div class="areaLeitura">
  <form method='post'>
    <div class='form-group'>
      <h4>Buscar Curso</h4>
      <!--<label for='exampleInputText1'>Nome</label>-->
      <input required name='nome' type='text' class='form-control form-control-sm' id='exampleInputText1' aria-describedby='textHelp' placeholder='Enter Name'>
    </div>
    <input type='submit' name='ver' class='btn btn-primary btn-sm' value='Buscar por nome'>
  </form>
  <br>
  <form method='post'>
    <input type='submit' name='verTodos' class='btn btn-primary btn-sm' value='Buscar todos'>
  </form>
</div>

<?php
  if (@$_POST['ver']) {

    $control = new Controller;
    $data = array(
      'nome'=>$_POST['nome'],
    );

    $control->action('verCurso', $data);
  }

  if(@$_POST['verTodos']){
    
    $control = new Controller;
    $control->action('verTodosCursos'); 
  }
?>