<?php
ob_start();
?>
<h1>Ingreso </h1>
<h2>Inico de Sesion</h2>

<div class="container">
  <form method="post" class="form-horizontal col-xs-6">
    <div class="form-group">
      <label class="control-label col-sm-2">C.I.: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtCIIngreso" placeholder="Ingrese CI" name="txtCIIngreso" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Contraseña:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="txtPassIngreso" placeholder="Enter password" name="txtPassIngreso" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name="btnIngresar" id="btnIngresar" value="Iniciar">
      </div>
      <buttom type="button" class="btn btn-default"><a href="index.php?action=RegistroUsuario">Registro</a></buttom>
    </div>

     
  </form>
  
  <?php

$Ingreso = new LecturaController();
$Ingreso->LoginController();

if(isset($_GET["action"])){

  if($_GET["action"]=="fallo"){
    echo "Error al ingresar";
  }
}
$registro = new RegistroController();
$registro->registroUsuariosController();
if(isset($_GET["action"])){

  if($_GET["action"]=="ok"){
    echo "Registro Exitoso Ingrese su usuario";
  }
}


?>
</div>
