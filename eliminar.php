<?php 
           // incluimos la conexion
      include 'conexion.php';
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $idpersona = $data->id_persona;

      //insertamos datos a los campos de nuestra tabla
      $query = "DELETE FROM public.persona
      WHERE id_persona = $idpersona;";

      if(pg_query($conexion, $query)){
        header('Content-Type: application/json');
        echo json_encode($data);
      }
      else{
        echo 'Inténtalo de nuevo';
      }
      pg_close($conexion);
?>