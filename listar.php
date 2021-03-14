<?php 
           // incluimos la conexion
include 'conexion.php';
//insertamos datos a los campos de nuestra tabla
 $query = "SELECT id_persona, nombre, direccion, edad
 FROM public.persona;";
$ok = true;
// Ejecutar la consulta:
 $rs = pg_query( $conexion, $query );
if( $rs )
{
    // Obtener el número de filas:
     if( pg_num_rows($rs) > 0 )
    {
        $res = "[";
         while( $obj = pg_fetch_object($rs) )
             $res=$res.json_encode($obj).",";
    header('Content-Type: application/json');
        $res = substr($res,0,-1);
        echo $res."]";
    }
    else
        echo "<p>No se encontraron personas</p>";
}
else
    $ok = false;
return $ok;
?>