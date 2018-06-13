<?php
class Conexion{
    public function Conectar(){
        
        
        $link= new PDO("sqlsrv:Server=CESAR\SERVIDORXD;Database=ProyectoLab2","sa","llcesarll11");
        return($link);
        
    }  
    
    
}
