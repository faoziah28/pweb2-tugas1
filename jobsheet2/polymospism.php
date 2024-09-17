<?php
//definisi class Pengguna
class Pengguna {
    protected $nama; //property protected untuk nama

    //constructor untuk menginisialisasi nama
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode aksesFitur 
    public function aksesFitur(){
        return $this->nama;
    }
}
//class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $matkul; //property matkul yang private

    //constructor untuk menginisialisasi matkul dan nama
    public function __construct ($nama, $matkul){
        $this->nama = $nama;
        $this->matkul = $matkul;
    }

    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Dosen $this->nama mengampu $this->matkul";
    }
}
//class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $ID; //property ID yang private
   
    //constructor untuk menginisialisasi ID dan nama
    public function __construct ($nama, $ID){
        $this->nama = $nama;
        $this->ID = $ID;
    }

    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Nama $this->nama dengan ID $this->ID ";
    }
}

// instansi objek dari class dosen dan mahasiswa
$dosen = new Dosen("Santi", "DIP");
$mahasiswa = new Mahasiswa("Anisa", "230302075");

//pemanggilan metode aksesFitur
echo $dosen->aksesFitur() . "<br>"; //Menampilkan Output dosen
echo $mahasiswa->aksesFitur(); //menampilkan output mahasiswa
?>