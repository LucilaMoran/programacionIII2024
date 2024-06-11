<?php
include("model/idStudent.class.php");
$id=$_REQUEST["idStudent"];

$student=new Student();
$student->setStudent($id);
$student->getStudent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de edición de estudiantes</title>
</head>
<body>
    <form name="editStudent" method="POST" action="controller/student.controller.php">
        <input type="hidden" name="operation" value="edit"/>
        <Label>DNI:</label> <input type="text" name="dni" value="<?=student->getDNI();?>"><br>
        <Label>Nombre:</label> <input type="text" name="name" value="<?=student->getname();?>"><br>
        <Label>Apellido:</label> <input type="text" name="surname" value="<?=student->getsurname();?>"><br>
        <Label>Tel&eacute;fono:</label> <input type="text" name="phone" value="<?=student->getphone();?>"><br>
        <Label>Direcci&oacute;n:</label> <input type="text" name="address" value="<?=student->getaddress();?>"><br>
        <Label>E-mail:</label> <input type="email" name="email" value="<?=student->getemail();?>"><br>
        <Label>Fecha de nacimiento:</label> <input type="date" name="Birthdate" value="<?=student->getbirthdate();?>"><br>
        <Label>Contrase&ntilde;a:</label> <input type="password" name="password" value="<?=student->getpassword();?>"><br>
        <Label>Colegio:</label> <input type="text" name="school" value="<?=student->getschool();?>"><br>

</body>
</html>