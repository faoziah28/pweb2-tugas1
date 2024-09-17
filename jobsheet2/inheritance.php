<?php
// Membuat kelas Pengguna dengan tipe inheritance yaitu kelas bisa mewarisi properti dan metode dari kelas lain
class Pengguna {
    protected $nama; // Atribut nama

    // Konstruktor kelas Pengguna
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
    private $matakuliah;

    // Konstruktor untuk kelas Dosen
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama); // Memanggil konstruktor kelas induk
        $this->matakuliah = $matakuliah;
    }

    public function getMatakuliah() {
        return $this->matakuliah;
    }

    public function tampilkanDosen() {
        // Menggunakan metode getter getNama() untuk mengakses nama dari kelas induk
        return "Nama : " . $this->getNama() . "<br> Mata Kuliah : " . $this->matakuliah;
    }
}
    // Buat objek dari kelas Dosen
    $dosen1 = new Dosen("Anisa", "DIP");

    // Menampilkan informasi tentang objek
    echo $dosen1->tampilkanDosen();
?>
