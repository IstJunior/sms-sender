<?php
// Copyright (c) 2020, Altiria TIC SL
// All rights reserved.
// El uso de este c�digo de ejemplo es solamente para mostrar el uso de la pasarela de env�o de SMS de Altiria
// Para un uso personalizado del c�digo, es necesario consultar la API de especificaciones t�cnicas, donde tambi�n podr�s encontrar
// m�s ejemplos de programaci�n en otros lenguajes y otros protocolos (http, REST, web services)
// https://www.altiria.com/api-envio-sms/
$date = new DateTime("now", new DateTimeZone('America/New_York') );
echo $date->format('Y-m-d H:i:s');
// YY y ZZ se corresponden con los valores de identificacion del
// usuario en el sistema.
include('httpPHPAltiria.php');
if(isset($_POST['enviar'])){
$altiriaSMS = new AltiriaSMS();
//$altiriaSMS ->setUrl("https://www.altiria.net/api/http");
$altiriaSMS->setLogin('esnakijr99@gmail.com');
$altiriaSMS->setPassword('tf4mv9tf');
// Descomentar para utilizar la autentificaci�n mediante apikey
//$altiriaSMS->setApikey('YY');
//$altiriaSMS->setApisecret('ZZ');
$altiriaSMS->setDebug(true);

//Use this ONLY with Sender allowed by altiria sales team
//$altiriaSMS->setSenderId('TestAltiria');
//Concatenate messages. If message length is more than 160 characters. It will consume as many credits as the number of messages needed
//$altiriaSMS->setConcat(true);
//Use unicode encoding (only value allowed). Can send ����� but message length reduced to 70 characters
//$altiriaSMS->setEncoding('unicode');

 $sDestination = $_POST['number']; 
 $sMessage = $_POST['message'];
//$sDestination = '346xxxxxxxx,346yyyyyyyy';
//$sDestination = array('573058721675','573112353686');
$DateAndTime = date('m-d-Y h:i:s a', time());  
$response = $altiriaSMS->sendSMS($sDestination, $sMessage);

if (!$response)
  echo "El envio ha terminado en error";
else{
  //echo'<script type="text/javascript"> alert("Enviado correctamente"); window.location.href="form.php"; </script>'; 
  header("Location:index.php");
 
  }
}  
?>

