<?php
ob_start();
session_start();
if(!$_SESSION["validar"]){
  header("location:index.php?action=inicio");
}
?>
<h1>Tareas</h1>

<div class="container">
                                                                                       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fecha Inicio</th>
        <th>Fecha Final</th>
        <th>Laboratorio</th>
        <th>Encargado</th>
        <th>Estado</th> 
        <th>Detalle</th>
        <th>Finalizar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $vista=new LecturaController();
      $vista->ListaTareasController();
      
      ?>



    </tbody>
  </table>
 
      <!-- Modal -->
      <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>
  <?php
   $finalizar = new editarController();
   $finalizar->finalizarTareaController();
   ?>
  </div>
      <buttom type="button" class="btn btn-default"><a href="index.php?action=rTarea">Registro</a></buttom>
    </div>
</div>