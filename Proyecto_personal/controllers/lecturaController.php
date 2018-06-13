<?php
class LecturaController{
 //login 
    public function LoginController()
    {
        if(isset($_POST["txtCIIngreso"])){
            $datosController = array("CiEncargado"=>$_POST["txtCIIngreso"],
                                    "password"=>$_POST["txtPassIngreso"]);
            $respuesta = Datos::LoginModel($datosController,"Encargado");
            

            
            if($respuesta["ciEncargado"]== $_POST["txtCIIngreso"] && $respuesta["passw"]==$_POST["txtPassIngreso"]){
                
              session_start();
              $_SESSION["validar"]=true;
              header("location:index.php?action=tareas");
                
            }
            else{
                header("location:index.php?action=fallo");
               
            }
          
        }
    }
    //lista Tareas
    public function ListaTareasController(){

        $respuesta = Datos::ListaTareasModel("Encargado","Laboratorio","Tarea");
        foreach($respuesta as $row => $item){
        echo'<tr>
        <td>'.$item["idTarea"].'</td>
        <td>'.$item["fechaInicio"].'</td>
        <td>'.$item["fFinalFinal"].'</td>
        <td>'.$item["codigoLab"].'</td>
        <td>'.$item["nombre"].'</td>
        <td>'.$item["estadoTarea"].'</td>
          <td><button class="btn btn-default " data-toggle="modal" data-target="#'.$item["idTarea"].' ">Detalle</button></td>
          <!-- Modal -->
          <div class="modal fade" id="'.$item["idTarea"].'" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>'.$item["descripcion"].'
                  </p>
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>
          <td><button class="btn btn-default" ><a href="index.php?action=tareas&idTarea='.$item["idTarea"].'">Finalizar</a></button></td>
      </tr>';
        }
      
    }
    public function ListaLabController(){
        
        if(isset($_GET["action"])){
            
            $LabController = $_GET["action"];
            $respuesta = Datos::ListaLabModel("Equipo","Laboratorio",$LabController);
            
            foreach($respuesta as $row=>$item){
            echo '<tr>
            <td>'.$item["idEquipo"].'</td>
            <td>'.$item["CodigoFijo"].'</td>
            <td>'.$item["serial"].'</td>
            <td>'.$item["codigoLab"].'</th>
            <td>'.$item["fechaAdquicicion"].'</td>
              <td><button class="btn btn-default " data-toggle="modal" data-target="#'.$item["idEquipo"].'" >Detalle</button></td>
              <!-- Modal -->
              <div class="modal fade" id="'.$item["idEquipo"].'" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                      <p>'.$item["caracteristicas"].'</p>
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <td><button class="btn btn-default" ><a href="index.php?action=ActualizarEquipo&idEquipo='.$item["idEquipo"].'">Actualizar</a></button></td>
          </tr>';
            }
        }
        
        
        
    }
}
?>