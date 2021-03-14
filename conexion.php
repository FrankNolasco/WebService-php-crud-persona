<?php 
//variables para la coneccion
   $host= "localhost";
   $port= "5432";
   $user= "postgres";
   $database="BD_Personas";
   $password ="123456";
 
   $conexion=pg_connect("host=$host  port=$port user=$user 
                        dbname=$database password=$password");
 
   //si fallara la conexion con la BD
   if (!$conexion) {
    echo "error en la conexion";
   }else{
 
    //echo 'conexion correctamente';
   }
 ?>