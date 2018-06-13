<?php
class editarController{
    
    //finalizacion de tarea
    public function finalizarTareaController(){
       if(isset($_GET["idTarea"])){
       $datosController=$_GET["idTarea"];
       $Respuesta=Datos::finalizarTareaModel($datosController,"Tarea");
            if($Respuesta=="success"){
            
                header("location:index.php?action=tareas");
                echo "finalizado";
            }
        }
    }
    //Actualizacion de datos de Equipos
    public function EditarEquipoController(){

        $datosController=$_GET["idEquipo"];
        $Respuesta=Datos::editarEquipoController($datosController,"Equipo");
        
        echo '
        <div class="form-group">
        <label class="control-label col-sm-2" >ACD:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtACDReg" value="'.$Respuesta["CodigoFijo"].'" placeholder="ACD De Item" name="txtACDReg">
        </div>
      </div>
        
        
      <div class="form-group">
        <label class="control-label col-sm-2">Serial:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="txtSerialReg"  value="'.$Respuesta["serial"].'" placeholder="Ingrese el Serial" name="txtSerialReg">
        </div>
      </div>
        
        
        <div class="form-group">
        <label class="control-label col-sm-2">Marca:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="txtMarcaReg"  value="'.$Respuesta["marca"].'" placeholder="Ingrese la Marca" name="txtMarcaReg">
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2">Modelo:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="txtModeloReg"  value="'.$Respuesta["modelo"].'" placeholder="Ingrese el Modelo" name="txtModeloReg">
        </div>
      </div>
        
         <div class="form-group">
        <label class="control-label col-sm-2">Fecha Adquicicion:</label>
        <div class="col-sm-10">          
          <input type="date" class="form-control" id="txtFechaReg" placeholder="Ingrese el Fecha" name="txtFechaReg">
        </div>
      </div>
      <div class="form-group" >
        <label for="sel1">Seleccione el Laboratorio:</label>
        <select class="form-control" id="txtidLabReg" name="txtidLabReg">
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
        <textarea  class="form-control" rows="5" name="txtDescripcionReg"   id="txtDescripcionReg">'.$Respuesta["caracteristicas"].'</textarea>
      </div>
      
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" id="txtActualizarEq" name="txtActualizarEq">Actualizar</button>
        </div>
        
      </div>';
    }

    
}
?>