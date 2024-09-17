<?php
//membuat class mahasiswa
class Mahasiswa {
    /*atribut atau properties berfungsi menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC bisa diakses dari mana saja
    public $nim; 
    public $jurusan; 
    //construct berfunsi Menginisialisasi atribut atau preoperty nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode atau function agar bisa tampilData
    public function tampilData(){
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
}
//instansiasi objek mahasiswa1
$mahasiswa1 = new Mahasiswa("Anisa", "230302075", "komputer dan bisnis");
//menampilkan informasi tentang objek 
echo $mahasiswa1->tampilData(); //output : Nama: Anisa, NIM: 230302075, Jurusan: komputer dan bisnis
?>