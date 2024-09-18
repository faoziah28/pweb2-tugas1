<?php
//class abstrak
abstract class Course {
    abstract public function getCourseDetails();
}
//kelas onlinecourse diwarisi dari kelas Course
class OnlineCourse extends Course{
    //property class onlinecourse yang private pengajar dan matkul
    private $pengajar;
    private $matakuliah;

    //menginisialisasi property pengajar dan matkul oleh construct
    public function __construct($pengajar, $matakuliah){
        $this->pengajar = $pengajar;
        $this->matakuliah = $matakuliah;
    }

    //implementasi metode getCourseDetails() berasal dari class abstrak course
    public function getCourseDetails() {
        return "Online Course dengan pengajar: $this->pengajar dan matkul $this->matakuliah.";
    }
}
//class offlinecourse yang mewarisi class course
class OfflineCourse extends Course {
    //property yang di privat
    private $tempat;
    private $hari;

     //menginisialisasi property tempat dan hari oleh construct
    public function __construct($tempat, $hari){
        $this->tempat = $tempat;
        $this->hari = $hari;
    }

    //penerapan metode getCourseDetails() berasal class abstrak course
    public function getCourseDetails() {
        return "Online Course dengan tempat: $this->tempat dan hari $this->hari.";
    }
}
//instansiasi objek dari class Onlinecourse
$online = new OnlineCourse("Anis", "pweb");
//instansiasi objek dari class Offlinecourse
$offline = new OfflineCourse("Bimbel DPC", "kamis");
//memanggil metode getCourseDetails() asalnya objek online dan offline
echo $online->getCourseDetails() . "<br>";
echo $offline->getCourseDetails();

?>
