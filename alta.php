<html>
<head>
<meta charset="utf-8">


<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave1=$_POST['clave1'];
$pais=$_POST['pais'];
$t_doc=$_POST['t_doc'];
$num_doc=$_POST['num_doc'];
$domicilio=$_POST['domicilio'];
$localidad=$_POST['localidad'];
$cp=$_POST['cp'];
$telefono=$_POST['telefono'];
$c_titulo=$_POST['c_titulo'];


$contenido="$nombre;$apellido;$correo;$usuario;$clave1;$pais;$t_doc;$num_doc;$domicilio;$localidad;$cp;$telefono;$c_titulo;";
$archivo=fopen("usuario.txt","a");
fwrite($archivo,$contenido);

?>

</head>
<body>
enviado
</body>
</html>