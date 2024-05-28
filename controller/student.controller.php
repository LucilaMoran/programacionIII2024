<?php
include("model/student.class.php");

$student= new Student(); //Creamos el objeto de $student de tipo student

$operation=$_REQUEST["operation"];
$student->setDni($_REQUEST ["dni"]);
$student->setSurname($_REQUEST ["surname"]);
$student->setName($_REQUEST ["name"]);
$student->setBirthdate($_REQUEST ["birthdate"]);
$student->setPhone($_REQUEST ["phone"]);
$student->setAddress($_REQUEST ["address"]);
$student->setEmail($_REQUEST ["email"]);
$student->setPassword($_REQUEST ["password"]);
$student->setSchool($_REQUEST ["school"]);

$student->AddStudent();


if($operation=="add"){

}else if($operation=="update"){

}else if($operation=="delete"){

}

?>