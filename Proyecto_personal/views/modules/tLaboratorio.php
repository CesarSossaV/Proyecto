<?php
session_start();
if(!$_SESSION["validar"]){
  header("location:index.php?action=inicio");
}
?>
<h1>Registro de Laboratorios</h1>

<div class="container">
  <form method="POST" class="form-horizontal col-xs-6" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Laboratorio:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtIDLabReg" name="txtIDLabReg">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre Lab.:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtCodLabReg" name="txtCodLabReg">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Capacidad:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtCapacidadReg" name="txtCapacidadReg">
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Descripcion:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtDescReg" name="txtDescReg">
      </div>
    </div>
    
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="btnGuardar" name="btnGuardar">Registrar</button>
      </div>
    </div>
  </form>
  <?php
    $registroLab =new RegistroController();
    $registroLab->registroLabController();
  ?>
</div>