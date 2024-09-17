<?php
//Membuat Kelas Dosen
class Dosen {
     public $nama;
     public $nip;
     public $matakuliah;

     public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah =$matakuliah;
    }
    
    public function tampilkanDosen() {
        return "Nama : $this->nama <br>dengan NIP $this->nip <br>Matakuliah: $this->matakuliah.";
    }
}
$Dosen1 = new Dosen ("Anisa", "230302075", "Desain Interaksi Pengguna");
echo $Dosen1->tampilkanDosen();
?>