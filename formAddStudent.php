<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" name="formAddStudent" action="controller/student.controller.php">

        <input type="hidden" name="operation" value="add"/>
        
        <Label>DNI:</label> <input type="text" name="dni"><br>
        <Label>Nombre:</label> <input type="text" name="name"><br>
        <Label>Apellido:</label> <input type="text" name="surname"><br>
        <Label>Tel&eacute;fono:</label> <input type="text" name="phone"><br>
        <Label>Direcci&oacute;n:</label> <input type="text" name="address"><br>
        <Label>E-mail:</label> <input type="email" name="email"><br>
        <Label>Fecha de nacimiento:</label> <input type="date" name="Birthdate"><br>
        <Label>Contrase&ntilde;a:</label> <input type="password" name="password"><br>
        <Label>Colegio:</label> <input type="text" name="school"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>