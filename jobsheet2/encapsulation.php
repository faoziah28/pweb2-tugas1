<?php
//definisi class 
class Mahasiswa {
    private $nama; //Private hanya bisa diakses oleh kelasnya
    private $nim;
    private $jurusan;

    //constructor memberikasn inisialisasi pada atribut
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // menggunakan metode getter nama
    public function getNama(){
        return $this->nama;
    }

    //menggunakan  getter untuk nim
    public function getNim(){
        return $this->nim;
    }

    //menggunakan metode getter untuk jurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    // menggunakan metode setter nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    // menggunkan metode setter pada nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    //menggunakan metode setter untuk jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
// instansiasi objek berasal dari class mahasiswa
$mhs = new Mahasiswa ("Anisatun Faoziah", "230302075", "komputer dan bisnis");

//Menampilkan data Pertama dengan memanggil metode getter 
echo "Data Pertama : \n<br>";
echo "Mahasiswa: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNim() . "<br>";
echo "Jurusan: " . $mhs->getJurusan() . "<br>";

//mengubah data dengan metode setter
$mhs->setNama("sania");
$mhs->setNim("8888");
$mhs->setJurusan("Teknik Sipil");

//tampilkan data kedua setelah diubah dengan metode getter.
echo "<br>\nData Setelah Diubah : \n<br>";
echo "Mahasiswa: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNim() . "<br>";
echo "Jurusan: " . $mhs->getJurusan() . "<br>";
?>
