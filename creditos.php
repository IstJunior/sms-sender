<?php

include 'AltiriaClient.php';
use AltiriaSmsPhpClient;
use AltiriaRestClient\Test\TestAltiriaSmsPhpClientGetCreditHttp;

try {
    //Personaliza las credenciales de acceso
    $client = new AltiriaClient('esnakijr99@gmail.com', 'tf4mv9tf');
    $credit = $client-> getCredit();
    echo 'Crédito disponible: '.$credit;
} catch (\AltiriaSmsPhpClient\Exception\AltiriaGwException $exception) {
    echo 'Solicitud no aceptada:'.$exception->getMessage();
    echo 'Código de error: '.$exception->getStatus();
} catch (\AltiriaSmsPhpClient\Exception\JsonException $exception) {
    echo 'Error en la petición:'.$exception->getMessage();
} catch (\AltiriaSmsPhpClient\Exception\ConnectionException $exception) {
    if ($exception->getMessage().strpos('RESPONSE_TIMEOUT', 0) != -1) {
        echo 'Tiempo de respuesta agotado: '.$exception->getMessage();
    } else {
        echo 'Tiempo de conexión agotado: '.$exception->getMessage();
    }
}

?>