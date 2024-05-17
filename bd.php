<?php
$servidor="localhost";
$baseDeDatos="app";
$usuario="root";
$contraseña="";

    try{
        $conexion=new PDO("mysl:host=$servidor;dbname=$baseDeDatos",$usuario,$contraseña);
    }catch(Exception $ex){
        echo $ex->getMessage();
    }

?>