<?php
session_start();
 $archivo=fopen("usuarios.txt", "r");
 while(!feof($archivo))
 {
   $renglon = fgets($archivo). "<br />";
  $datosArray=explode("=>", $renglon);
  var_dump($datosArray);
 
  if($_POST["correo"] ==trim($datosArray[0]))
  {
     $datosArray[1] . $_POST['clave'];
    if($_POST["clave"]==trim($datosArray[1]))
        {
         $_SESSION['usuario']=$_POST["correo"];
         $_SESSION['nombre']=$datosArray[2];
         $_SESSION['apellido']=$datosArray[3];
             header("Location:home.html");
             }
      
   }
   
 }
   echo '<script language="javascript">alert("Validar los datos ingresador");</script>'; 
   echo '<a class="txt1" href="index.html">Click aqui para volver a intentar</a>';
fclose($archivo);
?> 