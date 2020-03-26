<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexion.php");

  $conexion = conexion();


  $registros = mysqli_query($conexion, "SELECT * FROM usuarios WHERE idUsuario=$_GET[idUsuario]");
  
 
  if ($resultado = mysqli_fetch_array($registros))  
  {
    $datos[] = $resultado;
  }
  
  $json = json_encode($datos);

  echo $json;
  
  header('Content-Type: application/json');
?>