<?php
include ("dabase.class.php");
class Student {
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
                $this->birthdate=$row["birthdate"];
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

    public function getdni (){

    }

    //Geeter y Setter
    public fuction getdni() {

    return $this->dni;
    }

    public function setdni ($dni){
    $this->dni=dni;

    }

        public function getdni (){

    }

    //Geeter y Setter
    public fuction getdni() {

    return $this->dni;
    }

    public function setdni ($dni){
    $this->dni=dni;

    }

    public function getsurname (){

    }

    //Geeter y Setter
    public fuction getsurname() {

    return $this->surname;
    }

    public function setsurname ($surname){
    $this->surname=$surname;

    }

    public function getname (){

    }

    //Geeter y Setter
    public fuction getname() {

    return $this->name;
    }

    public function setIdStudent ($idStudent){
    $this->name=$name;

    }

    public function getbirthdate (){

    }

    //Geeter y Setter
    public fuction getbirthdate() {

    return $this->birthdate;
    }

    public function setbirthdate ($birthdate){
    $this->birthdate=$birthdate;

    }

    public function getphone (){

    }

    //Geeter y Setter
    public fuction getphone() {

    return $this->phone;
    }

    public function setphone ($phone){
    $this->phone=$phone;

    }
   
    public function getaddress (){

    }

    //Geeter y Setter
    public fuction getaddress() {

    return $this->address;
    }

    public function setaddress ($address){
    $this->address=$address;

    }   
    
    public function getemail (){

    }

    //Geeter y Setter
    public fuction getemail() {

    return $this->email;
    }

    public function setemail ($email){
    $this->email=$email;

    }

    public function getpassword(){

    }

    //Geeter y Setter
    public fuction getpassword() {

    return $this->password;
    }

    public function setpassword($password){
    $this->password=$password;

    }   

    public function getschool (){

    }

    //Geeter y Setter
    public fuction getschool() {

    return $this->school;
    }

    public function setschool ($school){
    $this->school=$school;

    }
}




?>