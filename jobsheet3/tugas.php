<?php
//class parent
class Person {
    protected $name; //Dapat diakses oleh kelas itu sendiri dan kelas turunan.
         
    //construct untuk menginisialisasi property name
    public function __construct($name){
        $this->name = $name;
    }
    
    //method untuk mendapatkan name 
    public function getName(){
        return $this->name;
    }

    //menggunakan metode getRole
    public function getRole(){
        return "Data lengkap";
    }
} 
//class dosen diwarisi dari person
class Dosen extends Person {
    private $nidn; //property nidn yang private

    //inisialisasi property name dan nidn
    public function __construct($name, $nidn){
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    //override mengembalikan string dengan format khusus 
    public function getRole(){
        return "Dosen: $this->name, NIDN: $this->nidn ";
    }

    // Metode agar mendapatkan nidn
    public function getNidn(){
        return $this->nidn;
    }
}
//class mahasiswa diwarisi dari person
class Mahasiswa extends Person {
    //property nim yang private
    private $nim;

    //inisialisasi property name dan nim
    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    //override agar mengembalikan string dengan format khusus 
    public function getRole(){
        return "Mahasiswa: $this->name, NIM: $this->nim";
    }

    // Metode untuk memperoleh nim
    public function getNim(){
        return $this->nim;
    }
}
// buat class abstrak Jurnal
abstract class jurnal {
    abstract public function getJurnal();
}
//class jurnaldosen diwarisi dari kelas jurnal
class JurnalDosen extends jurnal{
    //property dosen
    private $dosen;

    //inisialisasi property dosen
    public function __construct($dosen){
        $this->dosen = $dosen;
    }

    //metode getJurnal() dari class abstrak Jurnal
    public function getJurnal() {
        return "Jurnal Dosen: $this->dosen .";
    }
}
//class JurnalMahasiswa diwarisi class Jurnal
class JurnalMahasiswa extends jurnal {
    //property mahasiswa
    private $mahasiswa;

    //inisialisasi property dari mahasiswa
    public function __construct($mahasiswa){
        $this->mahasiswa = $mahasiswa;
    }

    //implementasi metode getJurnal() berasal dari class abstrak Jurnal
    public function getJurnal() {
        return "Jurnal mahasiswa: $this->mahasiswa .";
    }
}
//instansiasi objek yang ada
$dsn = new Dosen("Anisa", "222");
$mhs = new Mahasiswa("Faoziah", "2303");
$dosen = new JurnalDosen("Bahasa Indonesia" );
$mahasiswa = new JurnalMahasiswa("Literasi Bahasa Indonesia");

//memanggil method untuk objek dosen
echo "Dosen:" . $dsn->getName() . "<br>";
echo "NIDN: " . $dsn->getNidn() . "<br>";
echo "Data: " . $dsn->getRole() . "<br>";
echo $dosen->getJurnal() . "<br>"."<br>";

//memanggil method untuk objek mahasiswa
echo "Mahasiswa: " . $mhs->getName() . "<br>";
echo "NIM: " . $mhs->getNim() . "<br>";
echo "Data: " . $mhs->getRole() . "<br>";
echo $mahasiswa->getJurnal() . "<br>";
?>
