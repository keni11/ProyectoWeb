<?php

$conexion = mysql_connect('localhost', 'id16974955_persona', '>+{K7VuI{I^UYgw%' );

if(!$conexion){
    echo "No se puede conectar con la base de datos";
}else{
    
    $base=mysql_select_db('id16974955_personas');
    
    if(!$base){
        echo "No se encuentra la base de datos";
    }
}

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

  $insertar = "INSERT INTO persona VALUES ('$usuario', '$nombre', '$contraseña', '$correo','$telefono')";
  $sql = mysql_query($insertar);

  if (!$sql) {
    echo "Algo salio mal";
  }else{
    echo "Datos guardados correctamente";
  }
  

  mysql_close($conexion);
  echo "Registro  Exitoso";

?>

