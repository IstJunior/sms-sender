
<?php
// Copyright (c) 2020, Altiria TIC SL
// All rights reserved.
// El uso de este c�digo de ejemplo es solamente para mostrar el uso de la pasarela de env�o de SMS de Altiria
// Para un uso personalizado del c�digo, es necesario consultar la API de especificaciones t�cnicas, donde tambi�n podr�s encontrar
// m�s ejemplos de programaci�n en otros lenguajes y otros protocolos (http, REST, web services)
// https://www.altiria.com/api-envio-sms/

// YY y ZZ se corresponden con los valores de identificacion del
// usuario en el sistema.
include('httpPHPAltiria.php');


$altiriaSMS = new AltiriaSMS();
$altiriaSMS->setUrl("http://www.altiria.net/api/http");
// Descomentar para utilizar la autentificaci�n mediante apikey
//$altiriaSMS->setApikey('YY');
//$altiriaSMS->setApisecret('ZZ');
$altiriaSMS->setLogin('esnakijr99@gmail.com');
$altiriaSMS->setPassword('tf4mv9tf');
$altiriaSMS->setDebug(true);

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $str = $AltiriaSMS->getCredit();
    if(preg_match('/.*OK Credit\(0\):(.*?)$/', $str, $match) == 1){
        echo "SALDO DISPONIBLE: ".$match[1]." MENSAJES";
    }
}

else if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sDestination = $_POST['phone'];
    $sMessage = $_POST['mensaje'];


    $response = $altiriaSMS->sendSMS($sDestination, $sMessage);

    if(!$response){
        echo "SE HA PRODUCIDO UN ERROR EN EL ENVIO DEL MENSAJE";
    }
    else
        echo $response;
    
}
//Use this ONLY with Sender allowed by altiria sales team
//$altiriaSMS->setSenderId('TestAltiria');
//Concatenate messages. If message length is more than 160 characters. It will consume as many credits as the number of messages needed
//$altiriaSMS->setConcat(true);
//Use unicode encoding (only value allowed). Can send ����� but message length reduced to 70 characters
//$altiriaSMS->setEncoding('unicode');
?>
</div>
<form action="testAtirialSmsFORM.php" method="POST">
    <label for="celular">Telefono Movil / Celular</label>
    <input type="text" name="phone">
    <label for="Mensaje">Mensaje</label>
    <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="" value="ENVIAR SMS">
</form>
    

