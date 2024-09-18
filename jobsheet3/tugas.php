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
//class dosen yang mewarisi dari person
class Dosen extends Person {
    private $nidn; //property nidn yang private

    //inisialisasi property name dan nidn
    public function __construct($name, $nidn){
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    //override untuk mengembalikan string dengan format khusus 
    public function getRole(){
        return "Dosen: $this->name, NIDN: $this->nidn ";
    }

    // Metode untuk mendapatkan nidn
    public function getNidn(){
        return $this->nidn;
    }
}
//class mahasiswa yang mewarisi dari person
class Mahasiswa extends Person {
    //property nim yang private
    private $nim;

    //inisialisasi property name dan nim
    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    //override untuk mengembalikan string dengan format khusus 
    public function getRole(){
        return "Mahasiswa: $this->name, NIM: $this->nim";
    }

    // Metode untuk mendapatkan nim
    public function getNim(){
        return $this->nim;
    }
}
//class abstrak Jurnal
abstract class jurnal {
    /*metode yang tidak memiliki implementasi dalam kelas 
    abstrak dan harus di implementasikan dalam kelas turunannya*/
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

    //implementasi metode getJurnal() dari class abstrak Jurnal
    public function getJurnal() {
        return "Jurnal mahasiswa: $this->mahasiswa .";
    }
}
//instansiasi objek yang ada
$dsn = new Dosen("Anisa", "222");
$mhs = new Mahasiswa("Faoziah", "TI 2D");
$dosen = new JurnalDosen("Bahasa Indonesia" );
$mahasiswa = new JurnalMahasiswa("Literasi Bahasa Indonesia");

//memanggil method untuk dosen
echo "Dosen:" . $dsn->getName() . "<br>";
echo "NIDN: " . $dsn->getNidn() . "<br>";
echo "Data: " . $dsn->getRole() . "<br>";
echo $dosen->getJurnal() . "<br>"."<br>";

//memanggil method untuk mahasiswa
echo "Mahasiswa: " . $mhs->getName() . "<br>";
echo "NIM: " . $mhs->getNim() . "<br>";
echo "Data: " . $mhs->getRole() . "<br>";
echo $mahasiswa->getJurnal() . "<br>";
?>
