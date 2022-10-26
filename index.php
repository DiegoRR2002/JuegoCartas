<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <div id="tituloMain">
        <h1>Conquer Cards</h1>
    </div>
    <div id="registroMain">
        <form id="formularioMain" method="post" action="pages/juego.php">
            <label for="cuadroTextoNombreMain">Nombre </label><input type="text" name="cuadroTextoNombreMain" class="cuadroTextoMain" placeholder="Usuario" required>
            <label for="cuadroTextoPassMain">Contraseña </label><input type="password" name="cuadroTextoPassMain" class="cuadroTextoMain" placeholder="Contraseña" required>
            <input type="submit" name="botonMain" value="Adentrarse">
        </form>
        <p>¿No estás registrado? <a href="pages/registro/registro.html">¡Registrate!</a></p>
    </div>
</body>
</html>