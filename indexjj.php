<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styls.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="hijo">
            <form action="testAltiriaSms.php" method="POST">
                <p>Telefono Movil / Celular</p>
                <input type="text" name="number">
                <p>Mensaje</p>
                <textarea name="message" id="" cols="30" rows="10"></textarea><br>
                <input type="submit" name="enviar" value="ENVIAR SMS">
            </form>
        </div>
    </div>


</body>

</html>