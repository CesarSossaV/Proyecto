<?php
session_start();
if(!$_SESSION["validar"]){
  header("location:index.php?action=inicio");
}
?>
<h1>Laboratorio 204</h1>

<div class="container">
                                                                                       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Num</th>
        <th>ACD</th>
        <th>Seria</th>
        <th>Ubicaion</th>
        <th>Fecha Adquicicion</th>
        <th>Detalle</th>
        <th>Actualizar</th>
      </tr>
    </thead>
    <tbody>
    <?php
  $Vista = new LecturaController();
  $Vista->ListaLabController();
?>
    </tbody>
  </table>
  
  </div>
  
</div>