<div class="areaLeitura">
  <form method='post'>
    <h4>Buscar Aluno</h4>
    <div class='form-group'>
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

    $control->action('viewStudent', $data);
  }

  if(@$_POST['verTodos']){
    
    $control = new Controller;
    $control->action('viewAllStudents'); 
  }