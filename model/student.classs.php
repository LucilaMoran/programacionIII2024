<?php
include ("dabase.class.php");
class Student{
    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $password, $school){
        $this->dni=$dni;
        $this->surname=$surname;
        $this->name=$name;
        $this->birthdate=$birthdate;
        $this->phone=$phone;
        $this->address=$address;
        $this->email=$email;
        $this->password=$password;
        $this->school=$school;
    }

    public function addStudent (){
        //crear consulta
        $sql="INSERT INTO students (dni, surname, name, birthdate, phone, address, email, password, school) VALUES 
        (".$this->dni.",'".$this->surname."', '".$this->name."', '".$this->birthdate."', '".$this->phone."', '".$this->address."', '".$this->email."', '".$this->password."','".$this->school."' ) "; 
        
        $this->$conexion=new Database();
        $result= $this->$conexion->query($sql);
        $this->$conexion->close();

        return $result;
    }

    public function editStudent (){
        $sql="UPDATE students SET dni=".$this->dni.",  surname='".$this->surname."', name='".$this->name."', birthdate='".$this->birthdate."', phone='".$this->phone."', address='".$this->address."', email='".$this->email."', password='".$this->password."', school='".$this->school."'
        WHERE idStudent=".$this->idStudent; 
        


        $this->$conexion=new Database();
        $result= $this->$conexion->query($sql);
        $this->$conexion->close();

        return $result;
    }

    public function deleteStudent (){
        $sql="DETELE FROM students WHERE idStudents=".$this->idStudent;
        
        $this->$conexion=new Database();
        $result= $this->$conexion->query($sql);
        $this->$conexion->close();

        return $result;
    }

    public function getStudent (){
        $sql="SELECT * FROM students WHERE idStudents=".$this->idStudent;
        
        $this->$conexion=new Database();
        $result= $this->$conexion->query($sql);
        $this->$conexion->close();

        return $result;

        if ($result){
            if($row=$result->fetch_assoc()){
                $this->dni=$row["dni"];
                $this->surname=$row["surname"];
                $this->name=$row["name"];
                $this->bithdate=$row["birthdate"];
                $this->phone=$row["phone"];
                $this->address=$row["address"];
                $this->email=$row["email"];
                $this->password=$row["password"];
                $this->school=$row["school"];
                return true;

            }
           
        }
        return false;
    }

    public function getAllStudents (){

    }

    //Geeter y Setter
    public fuction getIdStudent() {

    return $this->IdStudent;
    }

    public function setIdStudent ($idStudent){
    $this->idStudent=$idStudent;

    }

   
                
}




?>