<?php 

   $nombre = $_POST["nombre"];
   $correo = $_POST["Correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];

   $para = "otzoyjose1@gmail.com";
   $asunto = "Nuevo mensaje de $nombre";


   $mensaje = "

   Nombre del remitente: ".$nombre."
   telefono: ".$telefono."
   correo: ".$correo."
   mensaje: ".$mensaje."
   ";

   correo($para,$asunto,utf8_decode($mensaje)); 


   header("location: contact.html");


 ?>