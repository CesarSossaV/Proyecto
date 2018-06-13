<?php
ob_start();
?>
<h1>TI</h1>
<h2>Registros De Usuario</h2>

<div class="container">
  <form method="post" class="form-horizontal col-xs-6">
     <div class="form-group">
      <label class="control-label col-sm-2">C.I.: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtCIReg" placeholder="Ingrese CI" name="txtCIReg"  required>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Nombre: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtNombreReg" placeholder="Ingrese Nombre" name="txtNombreReg" required>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2">Apellidos: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtApellidoReg" placeholder="Ingrese Apellido" name="txtApellidoReg" required>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2">Turno: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtTurnoReg" placeholder="Ingrese Turno" name="txtTurnoReg" required>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2">Estado: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtEstadoReg" placeholder="Ingrese Estado" name="txtEstadoReg" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Contraseña:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="txtPassReg" placeholder="Enter password" name="txtPassReg" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name="btnRegistro" id="btnRegistro" value="Iniciar">
      </div>
    </div>
  </form>
<?php
$registro = new RegistroController();
$registro->registroUsuariosController();
if(isset($_GET["action"])){

  if($_GET["action"]=="ok"){
    echo "Registro Exitoso Ingrese su usuario";
  }
}
?>
</div>
