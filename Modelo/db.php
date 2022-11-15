<?php

class Database{
    public static function connect(){
        $conexion=new mysqli("localhost", "root", "", "primesaber_db");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>