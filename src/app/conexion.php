  
<?php

function conexion() {
  $conexion = mysqli_connect("localhost", "root", "", "pruebas");
  
  return $conexion;
}

?>