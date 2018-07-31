<?php
require_once "conexion.php";
class Datos extends Conexion{
    //Registros de usuarios
    public function registroUsuariosModel($datosModel,$tabla)
    {
        $stmt= Conexion::conectar()->prepare("insert into $tabla (ciEncargado,nombre,apellidos,turno,estadoEncargado,passw)
                                                         values (:CiEncargado,:Nombre,:Apellidos,:Turno,:Estado,:Password)");
        $stmt->bindParam(":CiEncargado",$datosModel["ciEncargado"],pdo::PARAM_STR);
        $stmt->bindParam(":Nombre",$datosModel["nombre"],pdo::PARAM_STR);
        $stmt->bindParam(":Apellidos",$datosModel["apellidos"],pdo::PARAM_STR);
        $stmt->bindParam(":Turno",$datosModel["turno"],pdo::PARAM_STR);
        $stmt->bindParam(":Estado",$datosModel["estado"],pdo::PARAM_STR);
        $stmt->bindParam(":Password",$datosModel["password"],pdo::PARAM_STR);

        if($stmt->execute()){

            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();

    }
    //registro de Equipo 
    public function registroEquipoModel($datosModel,$tabla){

        $stmt=Conexion::conectar()->prepare("insert into $tabla(CodigoFijo,serial,caracteristicas,fechaAdquicicion,marca,modelo,idLab)
                                                         VALUES(:codigofijo,:Serial,:Caracteristicas,:FechaAdq,:Marca,:Modelo,:IdLab)");
        $stmt->bindParam(":codigofijo",$datosModel["acd"],pdo::PARAM_STR);
        $stmt->bindParam(":Serial",$datosModel["serial"],pdo::PARAM_STR);
        $stmt->bindParam(":Caracteristicas",$datosModel["descripcion"],pdo::PARAM_STR);
        $stmt->bindParam(":FechaAdq",$datosModel["fechaAd"],pdo::PARAM_STR);
        $stmt->bindParam(":Marca",$datosModel["marca"],pdo::PARAM_STR);
        $stmt->bindParam(":Modelo",$datosModel["modelo"],pdo::PARAM_STR);
        $stmt->bindParam(":IdLab",$datosModel["idLab"],pdo::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "Error";
        }
    }
    //Registro de Laboratorio
    public function registroLabModel($datosModel,$tabla){
        $stmt=Conexion::conectar()->prepare("insert INTO  $tabla(idLab,codigoLab,capacidad,descripcion) 
        VALUES(:IdLab,:CodigoLab,:Capacidad,:Descripcion)");
        $stmt->bindParam(":IdLab",$datosModel["idLab"],pdo::PARAM_STR);
        $stmt->bindParam(":CodigoLab",$datosModel["codLab"],pdo::PARAM_STR);
        $stmt->bindParam(":Capacidad",$datosModel["capacidad"],pdo::PARAM_STR);
        $stmt->bindParam(":Descripcion",$datosModel["Descripcion"],pdo::PARAM_STR);
        
        if($stmt->execute()){

            return "success";
        }
        
    }
    //Registro Tarea 
    public function registroTareaModel($datosModel,$tabla){

        $stmt=Conexion::conectar()->prepare("INSERT INTO Tarea(estadoTarea,fFinalFinal,descripcion,idLab,ciEncargado) 
                                                        VALUES (:estado,:fechaFinal,:descr,:lab,:encargado)");
        $stmt->bindParam(":estado",$datosModel["Estado"]).pdo::PARAM_STR;
        $stmt->bindParam(":fechaFinal",$datosModel["FechaFinal"]).pdo::PARAM_STR;
        $stmt->bindParam(":descr",$datosModel["Desc"]).pdo::PARAM_STR;
        $stmt->bindParam(":lab",$datosModel["Lab"]).pdo::PARAM_STR;
        $stmt->bindParam(":encargado",$datosModel["Encargado"]).pdo::PARAM_STR;
        
        if($stmt->execute()){
            
            return "success";
        }
    }
    //ingreso Usuario
    public function LoginModel($datosModel,$tabla){

        $stmt = Conexion::conectar()->prepare("select ciEncargado,passw from $tabla where ciEncargado = :ciEncargado");
        $stmt->bindParam(":ciEncargado",$datosModel["CiEncargado"],pdo::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();


    }
    //lista Tareas
    public function ListaTareasModel($tabla1,$tabla2,$tabla3){
        $stmt = Conexion::conectar()->prepare("select t.idTarea,t.fechaInicio,t.fFinalFinal,l.codigoLab,e.nombre,t.estadoTarea,t.descripcion
        from $tabla1 e, $tabla2 l, $tabla3 t
        where e.ciEncargado=t.ciEncargado and l.idLab=t.idLab and t.estadoTarea='En Proceso'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    //Lista de Equipos
    public function ListaLabModel($tabla,$tabla2,$LabModel){
        if(
            $LabModel=="102" ||
            $LabModel=="103" ||
            $LabModel=="201" ||
            $LabModel=="202" ||
            $LabModel=="203" ||
            $LabModel=="204" ||
            $LabModel=="205" ||
            $LabModel=="206")
        {
            $stmt = Conexion::conectar()->prepare("select e.idEquipo,e.CodigoFijo,e.serial,l.codigoLab,e.fechaAdquicicion,e.caracteristicas
            from $tabla e, $tabla2 l
            where e.idLab = l.idLab and l.idLab=$LabModel");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
    }
    
    //Finalizar Tarea
    public function finalizarTareaModel($datosModel,$tabla){

        $stmt=Conexion::Conectar()->prepare("UPDATE $tabla SET estadoTarea='Finalizado' WHERE idTarea=$datosModel");
        
        if($stmt->execute()){
            return "success";
        }

    }
    //Editar Equipo
    public function editarEquipoController($datosModel,$tabla){

        $stmt= Conexion::conectar()->prepare("select * from $tabla where idEquipo = :IdEquipo");
        $stmt->bindParam(":IdEquipo",$datosModel,pdo::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }
    //Actualizar Equipo
    public function actualizarEqModel($datosModel,$tabla){
        $stmt=Conexion::conectar()->prepare("UPDATE $tabla
                SET 
                serial = :Serial
                ,caracteristicas = :Caracteristicas
                ,marca = :Marca
                ,modelo = :Modelo
                ,idLab = :IdLab
                WHERE idEquipo = :ID");
        $stmt->bindparam(":ID",$datosModel["id"],pdo::PARAM_STR);
        $stmt->bindparam(":Serial",$datosModel["serial"],pdo::PARAM_STR);
        $stmt->bindparam(":Caracteristicas",$datosModel["descripcion"],pdo::PARAM_STR);
        $stmt->bindparam(":Marca",$datosModel["marca"],pdo::PARAM_STR);
        $stmt->bindparam(":Modelo",$datosModel["modelo"],pdo::PARAM_STR);
        $stmt->bindparam(":IdLab",$datosModel["idLab"],pdo::PARAM_INT);
        if($stmt->execute()){
            return "success";
        }

    }

}


?>