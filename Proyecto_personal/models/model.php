<?php
class EnlacesPaginas{
    
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="laboratorios" ||
           $enlacesModel=="mantenimientos" ||
           $enlacesModel=="tareas" ||
           $enlacesModel=="salir" ||
           $enlacesModel=="102" ||
           $enlacesModel=="103" ||
           $enlacesModel=="201" ||
           $enlacesModel=="202" ||
           $enlacesModel=="203" ||
           $enlacesModel=="204" ||
           $enlacesModel=="205" ||
           $enlacesModel=="206" ||
           $enlacesModel=="tEquipo"||
           $enlacesModel=="tLaboratorio"||
           $enlacesModel=="Ingreso"||
           $enlacesModel=="rTarea"||
           $enlacesModel=="ActualizarEquipo"||
           $enlacesModel=="RegistroUsuario"){
            
            $module = "views/modules/".$enlacesModel.".php";
            
        }
        else if($enlacesModel=="index"){
            
            $module = "views/modules/inicio.php";
            
        }
        else if($enlacesModel=="ok"){
            
            $module = "views/modules/inicio.php";
            
        }
        else if($enlacesModel=="fallo"){
            
            $module = "views/modules/inicio.php";
            
        }
        else if($enlacesModel=="error"){
            
            $module = "views/modules/tareas.php";
            
        }
        
        else{
            
            $module="views/modules/inicio.php";
            
        }
        
        return $module;
        
    }
    
    
}


?>