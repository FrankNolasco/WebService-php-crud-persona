<?php 
           // incluimos la conexion
include 'conexion.php';
$json = file_get_contents('php://input');
$data = json_decode($json);
$nombre = $data->nombre;
$direccion = $data->direccion;
$edad = $data->edad;

//insertamos datos a los campos de nuestra tabla
 $query = "insert into persona(nombre,direccion,edad) 
                  values ('$nombre','$direccion','$edad')";
 
  if(pg_query($conexion, $query)){
    header('Content-Type: application/json');
  echo json_encode($data);
 
 }
  else{
 
  echo 'Inténtalo de nuevo';
 }
 pg_close($conexion);
?>