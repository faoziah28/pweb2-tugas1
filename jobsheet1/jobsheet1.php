<?php
    class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;

        public function tampilkanData() {
            return "Nama : $this->nama <br> Nim: $this->nim <br>Jurusan : $this->jurusan";
        }

        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
        public function updateJurusan($jurusan){
            $this-> jurusan = $jurusan;
        }


        public function setNim($nim){
            $this-> nim = $nim;
        }
    }

    //instansiasi objek
    $mahasiswa1 = new Mahasiswa("Anisa", "230302075", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilkanData()."<br>";


    $mahasiswa1 ->updateJurusan("Teknik Informatika");
    echo "<br>";
    echo $mahasiswa1->tampilkanData()."<br>";

    
    $mahasiswa1->setNim("123456");
    echo "<br>";
    echo $mahasiswa1->tampilkanData();
?>