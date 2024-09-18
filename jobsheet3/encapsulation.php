<?php
//buat kelas studen yang memiliki property nama dan studentId yg di privat
class Student{
    //property private
    private $name;
    private $studentID;

    //nama dan studentID di inisialisikan dengan constructor
    public function __construct($name, $studentID){
        $this->name = $name;
        $this->studentID = $studentID;
    }

    //metode Getter pada name
    public function getName(){
        return "Nama: " . $this->name;
    }

    //metode Getter pada studentID
    public function getStudentID(){
        return "ID: " . $this->studentID;
    }

    //metode Setter pada name
    public function setName($name){
        $this->name = $name;
    }

    //Setter untuk StudentID
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }
}
//instansiasi objek dari class student
$studentbaru = new Student("sofiatun", "555");

// Mengakses data melalui metode getter
echo $studentbaru->getName() . "<br>";
echo $studentbaru->getStudentID() . "<br>";

// Mengubah data dengan metode setter
$studentbaru->setName("Nurul");
$studentbaru->setStudentID("2828");

// Menampilkan setelah diubah
echo $studentbaru->getName() . "<br>";
echo $studentbaru->getStudentID();
?>
