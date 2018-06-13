<?php
ob_start();
session_start();
if(!$_SESSION["validar"]){
  header("location:index.php?action=inicio");
}
?>
<h1>Registro De Tarea</h1>

<div class="container">
  <form method="POST" class="form-horizontal col-xs-6" >
      
    <div class="form-group">
      <label class="control-label col-sm-2" >Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtEstadoTReg" value="En Proceso" name="txtEstadoTReg">
      </div>
    </div>
      
      
    
      
       <div class="form-group">
      <label class="control-label col-sm-2">Fecha a Completar:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="txtFechaTReg" placeholder="Ingrese el Fecha" name="txtFechaTReg">
      </div>
    </div>

    <div class="form-group" >
      <label for="sel1">Seleccione Encargado:</label>
      <select class="form-control" id="txtIdEnTReg" name="txtIdEnTReg">
        <option value="13431946sc">Cesar</option>
        
      </select>
    </div>

    <div class="form-group" >
      <label for="sel1">Seleccione el Laboratorio:</label>
      <select class="form-control" id="txtidLabTReg" name="txtidLabTReg">
        <option value="102">Laboratorio 102</option>
        <option value="103">Laboratorio 103</option>
        <option value="201">Laboratorio 201</option>
        <option value="202">Laboratorio 202</option>
        <option value="203">Laboratorio 203</option>
        <option value="204">Laboratorio 204</option>
        <option value="205">Laboratorio 205</option>
        <option value="206">Laboratorio 206</option>
      </select>
      </div>
      
      <div class="form-group">
      <label for="comment">Caracteristicas:</label>
      <textarea class="form-control" rows="5" name="txtDescripcionTReg" id="txtDescripcionTReg"></textarea>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="txtRegistrarT" name="txtRegistrarT">Registrar</button>
      </div>
    </div>
  </form>
  <?php

  $registroTarea = new RegistroController();
  $registroTarea->registroTareaController();
      
  ?>
  </div>