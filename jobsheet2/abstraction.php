<?php
// Kelas abstrak Pengguna
abstract class Pengguna {
    // Metode abstrak 
    abstract public function aksesFitur();
}

// Kelas Dosen di warisi kelas Pengguna
class Dosen extends Pengguna {
    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Fitur Masukan Nilai";
    }
}

// Kelas Mahasiswa di warisi kelas Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi metode abstrak aksesFitur
    public function aksesFitur() {
        return "Fitur Lihat Nilai";
    }
}

// Instansiasi objek kelas Dosen
$dosen = new Dosen ();
// output dari method aksesFitur
echo $dosen->aksesFitur() . "<br>";

// Instansiasi objek kelas Mahasiswa
$mahasiswa1 = new Mahasiswa();
// Menampilkan output dari methode aksesFitur
echo $mahasiswa1->aksesFitur();
?>
