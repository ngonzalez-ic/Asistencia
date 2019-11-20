<?php
include "claseAlumnos.php";
$nuevoAlumno = new Alumno();
$nuevoAlumno->nombre=$_POST['nombre'];
$nuevoAlumno->apellido=$_POST['apellido'];
$nuevoAlumno->correo=$_POST['correo'];
$nuevoAlumno->usuario=$_POST['usuario'];
$nuevoAlumno->clave1=$_POST['clave1'];
$nuevoAlumno->pais=$_POST['pais'];
$nuevoAlumno->t_doc=$_POST['t_doc'];
$nuevoAlumno->num_doc=$_POST['num_doc'];
$nuevoAlumno->domicilio=$_POST['domicilio'];
$nuevoAlumno->localidad=$_POST['localidad'];
$nuevoAlumno->cp=$_POST['cp'];
$nuevoAlumno->telefono=$_POST['telefono'];
$nuevoAlumno->c_titulo=$_POST['c_titulo'];
$nuevoAlumno->guardar();
?> 