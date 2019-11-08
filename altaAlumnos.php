<?php

session_start();
$alumnos=fopen("alumnos.txt", "r");
while(!feof($chat))
{
  $renglon = fgets($chat);
  echo $renglon."<br>";
}
?>