<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
</head>
<body>
    <h1> Panel de estudiantes </h1>
    <table>
    <thead>
        <tr>
            <th>ID estudiante</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Fecha de nacimiento</th>
            <th>Tel&eacute;fono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("model/student.class.php")
        $student= new Student();
        $allStudents= $student->getAllStudents();
        if(allStudents)
        foreach($allStudents as $data){
        print <tr>
            print "<td>".$data ["idStudent"]"</td>";
            print "<td>".$data ["surname"]"</td>";
            print "<td>".$data ["name"]"</td>";
            print "<td>".$data ["dni"]"</td>";
            print "<td>".$data ["birthdate"]"</td>";
            print "<td>".$data ["phone"]"</td>";
            print "<td>" "</td>";
        print </tr>
        }

        {else{
         print "No existe estudiantes cargados";  
        }
            print "No existe estudiantes cargados";
        }





        ?>
    </tbody> 
    </table>
</body>
</html>