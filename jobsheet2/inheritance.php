<?php
// Membuat kelas Pengguna dengan tipe inheritance yaitu kelas
// bisa mewarisi properti dan metode dari kelas lain
class Pengguna {
    protected $nama; // Atribut nama

    //Penggunaan Konstruktor pd kelas pengguna
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getter nama
    public function getNama() {
        return $this->nama;
    }
}

// Buat kelas Dosen yang mewarisi kelas Pengguna
class Dosen extends Pengguna {
    private $matkul;

    // Konstruktor untuk kelas Dosen
    public function __construct($nama, $matkul) {
        parent::__construct($nama); // Memanggil konstruktor kelas induk
        $this->matakuliah = $matkul;
    }

    public function getMatakuliah() {
        return $this->matakuliah;
    }

    public function tampilkanDosen() {
        // Menggunakan metode getter getNama() agar dapat akses kelas induk
        return "Nama : " . $this->getNama() . "<br> Mata Kuliah : " . $this->matakuliah;
    }
}
    // Buat objek dari kelas Dosen
    $dosennew = new Dosen("Anisa", "DIP");

    // Output tentang Objek
    echo $dosennew->tampilkanDosen();
?>
