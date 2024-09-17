<?php
// Kelas abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunannya
    abstract public function aksesFitur();
}

// Kelas Dosen yang mewarisi dari kelas Pengguna
class Dosen extends Pengguna {
    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Fitur Masukan Nilai";
    }
}

// Kelas Mahasiswa yang mewarisi dari kelas Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Fitur Lihat Nilai";
    }
}

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen ();
// Menampilkan output dari metode aksesFitur
echo $dosen->aksesFitur() . "<br>";

// Instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa();
// Menampilkan output dari metode aksesFitur
echo $mahasiswa->aksesFitur();
?>
