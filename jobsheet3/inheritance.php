<?php
//class parent
class Person {
   
    protected $name; //protected bisa diakses semua kelas turunan

    //inisialisasi property name
    public function __construct($name){
        $this->name = $name;
    }

    //metode agar mendapatkan name
    public function getName(){
        return $this->name;
    }
}
//class student diwarisi class person
class Student extends Person {
    //property tambahan khusus student
    public $studentID;

     // inisialisasi name dan studentID
    public function __construct($name, $studentID){
        // Memanggil constructor dari kelas induk
        parent::__construct($name);
        $this->studentID = $studentID;
    }

     // Metode agar mendapatkan studentID
    public function getStudentID(){
        return $this->studentID;
    }
}
//instansisasi objek
$studentnew = new Student("Anisatun", "2303");
//Agar tampil data dari metode getName
echo "Nama: " . $studentnew->getName() . "<br>";
//Agar tampil data dari metode getStudentID
echo "ID: " . $studentnew->getStudentID();
?>
