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
        return "Nama Dosen $this->nama mengampu $this->matkul";
    }
}
//class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $Id_Mhs; //property Id_Mhs pakai private
   
    //constructor untuk memberikan isnisialisasi Id_Mhs dan nama
    public function __construct ($nama, $Id_Mhs){
        $this->nama = $nama;
        $this->Id_Mhs = $Id_Mhs;
    }

    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Nama $this->nama dengan Id Mahasiswa $this->Id_Mhs ";
    }
}

// instansi objek dari class dosen dan mahasiswa
$dosenbaru = new Dosen("Santi", "DIP");
$mhsbaru = new Mahasiswa("Anisa", "230302075");

//pemanggilan metode aksesFitur
echo $dosenbaru->aksesFitur() . "<br>"; //Menampilkan Output dosen
echo $mhsbaru->aksesFitur(); //menampilkan output mahasiswa
?>
