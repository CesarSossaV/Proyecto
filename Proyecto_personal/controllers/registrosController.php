<?php
class RegistroController{
//registro de usuarios
    public function registroUsuariosController(){
    
        if(isset($_POST["txtCIReg"])){
        $datosController = array("ciEncargado"=>$_POST["txtCIReg"],
                                 "nombre"=>$_POST["txtNombreReg"],
                                 "apellidos"=>$_POST["txtApellidoReg"],
                                 "turno"=>$_POST["txtTurnoReg"],
                                 "estado"=>$_POST["txtEstadoReg"],
                                 "password"=>$_POST["txtPassReg"]);
        $respuesta = Datos::registroUsuariosModel($datosController,"Encargado");
        if($respuesta=="success"){

                
           header("location:index.php?action=ok");
          // header("location:tareas.php");
        
        }
        else{

            //header("location:index.php?action=RegistroUsuario");
            echo "Error al Registrar";
            
       }
     }
        
    }
    //Registro De Equipos
    public function registroEquipoController(){

        if(isset($_POST["txtACDReg"])){

            $datosController=array("acd"=>$_POST["txtACDReg"],
                                   "serial"=>$_POST["txtSerialReg"],
                                   "marca"=>$_POST["txtMarcaReg"],
                                   "modelo"=>$_POST["txtModeloReg"],
                                   "fechaAd"=>$_POST["txtFechaReg"],
                                   "descripcion"=>$_POST["txtDescripcionReg"],
                                   "idLab"=>$_POST["txtidLabReg"]);
            $respuesta=Datos::registroEquipoModel($datosController,"Equipo");
             
            if($respuesta=="success"){
               echo "Registro Exitoso";
            }
            else{
            echo "Error al Registrar";
            }
        }
       
    }
    //Registro Equipo
    public function registroLabController(){

        if(isset($_POST["txtIDLabReg"])){
            
            $datosController=array("idLab"=>$_POST["txtIDLabReg"],
                                   "codLab"=>$_POST["txtCodLabReg"],
                                   "capacidad"=>$_POST["txtCapacidadReg"],
                                   "Descripcion"=>$_POST["txtDescReg"]);
            $respuesta= Datos::registroLabModel($datosController,"Laboratorio");
            if($respuesta=="success"){
                echo "Registro Existoso";
            }
            else{
                echo "Error a Registrar";
            }
        }
    }
    //Registro de Tarea
    public function registroTareaController(){

        if(isset($_POST["txtEstadoTReg"])){
            $datosController=array("Estado"=>$_POST["txtEstadoTReg"],
                                   "FechaFinal"=>$_POST["txtFechaTReg"],
                                   "Encargado"=>$_POST["txtIdEnTReg"],
                                   "Lab"=>$_POST["txtidLabTReg"],
                                   "Desc"=>$_POST["txtDescripcionTReg"]);
            $respuesta=Datos::registroTareaModel($datosController,"Tarea");
            if($respuesta=="success"){
                header("location:index.php?action=tareas");
            }
            else{
                echo "error al Registrar";
            }
                                  
        }
    }
}
?>