<?php
//membuat class mahasiswa
class Mahasiswa {
    /*atribut atau properties berfungsi menyimpan
     data atau keadaan dari objek*/
    public $nama; //akses public bisa diakses semua kelas
    public $nim; 
    public $jurusan; 
    //inisialisasi atribut atau preoperty nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode atau function agar bisatampilData
    public function tampilData(){
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
}
//instansiasi objek mhs
$mhs = new Mahasiswa("Anisa", "230302075", "komputer dan bisnis");
//menampilkan informasi tentang objek 
echo $mhs->tampilData(); //output : Nama: Anisa, NIM: 230302075, Jurusan: komputer dan bisnis
?>
