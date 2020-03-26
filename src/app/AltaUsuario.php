<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");

  $conexion = conexion(); 
  

  mysqli_query($conexion, "INSERT INTO usuarios(nombre, telefono, email) VALUES
                  ('$params->nombre',$params->telefono, '$params->email')");    
  
  class Result {}

 
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Se registro exitosamente';

  header('Content-Type: application/json');

  echo json_encode($response);
?>