<?php
session_start();
if(!$_SESSION["validar"]){
    header("location:index.php?action=inicio");
}
?>
<h1>Registro De  Equipos</h1>

<div class="container">
  <form <form method="POST" class="form-horizontal col-xs-6">
  <?php

    $ActualizarEquipo = new editarController();
    $ActualizarEquipo->EditarEquipoController();

    $ActualizarEquipo->actualizarEqController();
    ?>
    
  </form>
  
</div>
