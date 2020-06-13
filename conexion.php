<?php

$host='localhost';
$user='root';
$password='';
$db ='covid2019umg';

$conection= @mysqli_connect($host,$user,$password,$db);

if(!$conection){
    echo "Error en a conexion";   
} 
?>