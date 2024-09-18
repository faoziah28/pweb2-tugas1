          
# Jobsheet 1

Kelas Mahasiswa:

          class Mahasiswa {
              public $nama;
              public $nim;
              public $jurusan;
          }
          
Kelas ini mendefinisikan properti dan metode untuk objek mahasiswa.

Properti:

                public $nama berfungsi Menyimpan nama mahasiswa.
                public $nim berfungsi  Menyimpan Nomor Induk Mahasiswa (NIM).
                public $jurusan berfungsi  Menyimpan jurusan mahasiswa.

Metode:

              __construct($nama, $nim, $jurusan): Konstruktor yang dijalankan saat objek dibuat. Ini menginisialisasi properti dengan nilai yang diberikan.
              tampilkanData(): Mengembalikan string yang menampilkan data mahasiswa dalam format HTML.
              updateJurusan($jurusan): Mengubah nilai properti jurusan untuk objek mahasiswa.
              setNim($nim): Mengubah nilai properti nim untuk objek mahasiswa.
              
Instansiasi Objek:

                    $mahasiswa1 = new Mahasiswa("Anisa", "230302075", "Komputer dan Bisnis");
                    Membuat objek baru dari kelas Mahasiswa dengan nama "Anisa", NIM "230302075", dan jurusan "Komputer dan Bisnis".
                    
Operasi dan Output:

          echo $mahasiswa1->tampilkanData()."<br>";
          Menampilkan data awal mahasiswa.
          
          $mahasiswa1->updateJurusan("Teknik Informatika");
          Mengubah jurusan mahasiswa menjadi "Teknik Informatika".
          
          echo $mahasiswa1->tampilkanData()."<br>";
          Menampilkan data setelah perubahan jurusan.
          
          $mahasiswa1->setNim("123456");
          Mengubah NIM mahasiswa menjadi "123456".
          
          echo $mahasiswa1->tampilkanData();
          Menampilkan data setelah perubahan NIM.


kodingan lengkapnya:


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





              

<img width="388" alt="job1" src="https://github.com/user-attachments/assets/a8443dcc-9436-437c-91f4-17fdf526a8ae">

# Tugas 1 Modul 1 & 2
Definisi Kelas Dosen:
                    class Dosen berfungsi Mendefinisikan kelas dengan nama Dosen.
                    <?php
                              //Membuat Kelas Dosen
                              class Dosen {
                              
Properti:

          public $nama yaitu untuk Menyimpan nama dosen.
          public $nip yaitu  untuk Menyimpan Nomor Induk Pegawai (NIP) dosen.
          public $matakuliah yaitu untuk Menyimpan nama mata kuliah yang diampu dosen.

Konstruktor:

          public function __construct($nama, $nip, $matakuliah):
          Ini adalah metode khusus yang dijalankan saat objek dari kelas Dosen dibuat.
          Parameter $nama, $nip, dan $matakuliah diisi dengan nilai yang diberikan saat objek dibuat dan digunakan untuk menginisialisasi properti kelas.
          $this->nama, $this->nip, dan $this->matakuliah diatur untuk menyimpan nilai parameter yang diterima.
          
Metode tampilkanDosen:

          public function tampilkanDosen():
          
instansiasi Objek:

          $Dosen1 = new Dosen("Anisa", "230302075", "Desain Interaksi Pengguna");:
          Membuat objek baru dari kelas Dosen dengan nama "Anisa", NIP "230302075", dan mata kuliah "Desain Interaksi Pengguna".
          Nilai-nilai ini dioper ke konstruktor untuk menginisialisasi properti objek.
Menampilkan Data:

          echo $Dosen1->tampilkanDosen();:
          Memanggil metode tampilkanDosen pada objek $Dosen1 untuk mendapatkan string yang berisi informasi dosen dan menampilkannya di browser.
 kodingan Tugas 1 modul 1 & 2
 
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
                                        return "Nama : $this->nama <br>dengan NIP $this->nip <br>Matakuliah:                                                             $this>matakuliah.";
                                        }
                                        }
                                        $Dosen1 = new Dosen ("Anisa", "230302075", "Desain Interaksi Pengguna");
                                        echo $Dosen1->tampilkanDosen();
                                         ?>






Outputnya :




<img width="384" alt="tgs1" src="https://github.com/user-attachments/assets/6c4c8163-09f4-4e98-8963-5dbffaff0bfa">





# Jobsheet2
 # class & object
 1. Membuat Class Mahasiswa
                    Class Mahasiswa{
                    }
    
     Di bagian ini, kita membuat class bernama Mahasiswa. Class adalah template atau cetakan untuk membuat objek. Di           dalam class ini, kita bisa menyimpan data dan membuat fungsi yang terkait dengan mahasiswa.

2. Menambahkan Atribut atau Properties
                                        public $nama;
                                        public $nim;
                                        public $jurusan;
   
          Ada tiga atribut (disebut juga properties) yang dibuat: nama, nim, dan jurusan. Atribut ini berfungsi untuk menyimpan informasi yang terkait dengan objek mahasiswa.
public berarti atribut ini bisa diakses dari luar class ini (bisa dipakai di kode lainnya).


3. Membuat Constructor
                       public function __construct($nama, $nim, $jurusan){
                                  $this->nama = $nama;
                                  $this->nim = $nim;
                                  $this->jurusan = $jurusan;
                              }


   Constructor adalah fungsi khusus yang akan dipanggil secara otomatis ketika sebuah objek baru dibuat.
Pada constructor ini, tiga parameter diperlukan: $nama, $nim, dan $jurusan. Nilai yang dimasukkan saat membuat objek akan digunakan untuk mengisi atribut nama, nim, dan jurusan di dalam class.
$this-> digunakan untuk merujuk pada atribut di dalam class. Jadi, $this->nama mengacu pada atribut nama dari objek yang sedang dibuat.

4. Membuat Metode tampilData
             public function tampilData(){
                        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
          }

Metode tampilData berfungsi untuk menampilkan informasi mahasiswa, yaitu nama, NIM, dan jurusannya. Fungsi ini akan mengembalikan string yang berisi informasi tersebut.
Atribut dari objek dipanggil menggunakan $this-> seperti $this->nama, yang akan menampilkan data yang sudah diisi sebelumnya.

5. Membuat Objek
                              $mhs = new Mahasiswa("Anisa", "230302075", "komputer dan bisnis");
    Di bagian ini, kita membuat sebuah objek baru dari class Mahasiswa bernama $mhs.
    Ketika objek dibuat, kita mengisi parameter nama, nim, dan jurusan dengan nilai "Anisa", "230302075", dan "komputer dan           bisnis". Nilai ini akan otomatis diisikan ke dalam atribut nama, nim, dan jurusan dari objek $mhs.


6.  Menampilkan Data Mahasiswa
   
                        echo $mhs->tampilData();
    
Di sini, kita memanggil metode tampilData dari objek $mhs yang telah kita buat sebelumnya.
Hasilnya adalah informasi mengenai mahasiswa dengan nama "Anisa", NIM "230302075", dan jurusan "komputer dan bisnis".
kodingannya:


                             
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
                                                          return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan:                                                                       $this->jurusan";
                                                      }
                                                  }
                                                  //instansiasi objek mhs
                                                  $mhs = new Mahasiswa("Anisa", "230302075", "komputer dan bisnis");
                                                  //menampilkan informasi tentang objek 
                                                  echo $mhs->tampilData(); //output : Nama: Anisa, NIM: 230302075, Jurusan: komputer                                                   dan bisnis
                                        ?>

outputnya :

<img width="404" alt="j1" src="https://github.com/user-attachments/assets/4a57a438-0b8c-4d0f-8fee-ca7fbfb693b0">

# encapsulation
Definisi Kelas Mahasiswa:

           class Mahasiswa: Mendefinisikan kelas Mahasiswa yang berfungsi untuk mengelola data mahasiswa.
           
Properti (Atribut):

          private $nama: Menyimpan nama mahasiswa. private berarti properti ini hanya dapat diakses dari dalam kelas Mahasiswa.
          private $nim: Menyimpan Nomor Induk Mahasiswa (NIM). Juga hanya dapat diakses dari dalam kelas.
          private $jurusan: Menyimpan jurusan mahasiswa. Juga hanya dapat diakses dari dalam kelas.

Konstruktor:

          public function __construct($nama, $nim, $jurusan):
          Konstruktor ini dijalankan saat objek Mahasiswa dibuat.
          Menginisialisasi properti nama, nim, dan jurusan dengan nilai yang diberikan saat pembuatan objek.
Metode Getter:

          public function getNama():
          Mengembalikan nilai dari properti nama.
          public function getNim():
          Mengembalikan nilai dari properti nim.
          public function getJurusan():
          Mengembalikan nilai dari properti jurusan.
          
Metode Setter:

          public function setNama($nama):
Mengatur atau mengubah nilai dari properti nama.

kodingan encapsulation:
                                        <?php
                                        //definisi class 
                                        class Mahasiswa {
                                            private $nama; //Private hanya dapat diakses dalam kelas itu sendiri.
                                            private $nim;
                                            private $jurusan;

                                            //constructor untuk menginisialisasi atribut
                                           public function __construct($nama, $nim, $jurusan){
                                               $this->nama = $nama;
                                               $this->nim = $nim;
                                               $this->jurusan = $jurusan;
                                            }

                                            //metode getter untuk nama
                                            public function getNama(){
                                                return $this->nama;
                                            }

                                            //metode getter untuk nim
                                            public function getNim(){
                                                return $this->nim;
                                          }

                                            //metode getter untuk jurusan
                                            public function getJurusan(){
                                                return $this->jurusan;
                                            }

                                            //metode setter nama
                                            public function setNama($nama){
                                                $this->nama = $nama;
                                            }

                                            //metode setter nim
                                            public function setNim($nim){
                                                $this->nim = $nim;
                                                   }

                                            //metode setter untuk jurusan
                                            public function setJurusan($jurusan){
                                                          $this->jurusan = $jurusan;
                                            }
                                        }
                                        // instansiasi objek berasal dari class mahasiswa
                                        $mahasiswa1 = new Mahasiswa ("Anisatun Faoziah", "230302075", "komputer dan                                                   bisnis");

                                        //Menampilkan data awal dengan memanggil metode getter 
                                        echo "Data Awal : \n<br>";
                                        echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>";
                                        echo "NIM: " . $mahasiswa1->getNim() . "<br>";
                                        echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

                                        //mengubah data dengan metode setter
                                        $mahasiswa1->setNama("sania");
                                        $mahasiswa1->setNim("8888");
                                        $mahasiswa1->setJurusan("Teknik Sipil");

                                        //tampilkan data yang sudah diubah dengan metode getter.
                                        echo "<br>\nData Setelah Diubah : \n<br>";
                                        echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>";
                                        echo "NIM: " . $mahasiswa1->getNim() . "<br>";
                                        echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
                                        ?>


Outputnya:
<img width="356" alt="j2 1" src="https://github.com/user-attachments/assets/a04140bd-e811-4dc4-9401-458165a29a14">


# inheritance pd jobsheet 2
          1. Membuat Kelas Pengguna


                                        class Pengguna {
                                            protected $nama;
                                            
Di sini kita membuat class bernama Pengguna. Class ini memiliki atribut nama, yang digunakan untuk menyimpan nama pengguna.
Kata protected artinya atribut ini hanya bisa diakses dari dalam class itu sendiri dan class yang mewarisinya (kelas turunan).

2. Membuat Konstruktor untuk Pengguna
php
Copy code
public function __construct($nama) {
    $this->nama = $nama;
}
Constructor ini akan otomatis dipanggil ketika kita membuat objek dari kelas Pengguna. Fungsi ini menerima parameter $nama dan menyimpannya di atribut $this->nama (yaitu atribut nama di dalam objek tersebut).
3. Metode getNama

                              public function getNama() {
                                  return $this->nama;
                              }
Ini adalah getter yang memungkinkan kita untuk mengambil atau mendapatkan nilai dari atribut nama. Jadi, setiap kali kita memanggil getNama(), itu akan mengembalikan nilai nama pengguna.

4. Membuat Kelas Dosen yang Mewarisi Pengguna

          class Dosen extends Pengguna {
   
Inheritance: Di sini kita membuat kelas Dosen yang mewarisi atau mengambil sifat-sifat dari kelas Pengguna. Ini berarti kelas Dosen dapat menggunakan atribut dan metode yang ada di dalam kelas Pengguna.
5. Atribut Baru untuk Dosen

                    private $matkul;
                    
Di dalam kelas Dosen, kita menambahkan atribut baru bernama $matkul yang akan menyimpan mata kuliah yang diajarkan oleh dosen.
private berarti atribut ini hanya bisa diakses dari dalam kelas Dosen saja.

6. Konstruktor untuk Kelas Dosen

                    public function __construct($nama, $matkul) {
                        parent::__construct($nama);
                        $this->matakuliah = $matkul;
                    }
Konstruktor ini dipanggil ketika kita membuat objek dari kelas Dosen.
parent::__construct($nama) berfungsi untuk memanggil konstruktor dari kelas induk (Pengguna), sehingga atribut nama bisa diisi.
Kemudian, matakuliah disimpan ke dalam atribut $this->matakuliah.

7. Metode getMatakuliah

                    public function getMatakuliah() {
                        return $this->matakuliah;
                    }
Fungsi ini digunakan untuk mengambil nilai dari atribut matakuliah, mirip seperti metode getNama() pada kelas Pengguna.

8. Metode tampilkanDosen

          public function tampilkanDosen() {
              return "Nama : " . $this->getNama() . "<br> Mata Kuliah : " . $this->matakuliah;
          }
Metode ini digunakan untuk menampilkan data dosen, yaitu nama dan mata kuliah yang diambil dari atribut nama (melalui getNama()) dan matakuliah.
getNama() dipanggil untuk mendapatkan nilai dari atribut nama yang diwarisi dari kelas Pengguna.

9. Membuat Objek dari Kelas Dosen

                    $dosennew = new Dosen("Anisa", "DIP");
   Di sini kita membuat objek baru bernama $dosennew dari kelas Dosen.
   Nilai "Anisa" dimasukkan ke dalam atribut nama dan "DIP" dimasukkan ke dalam atribut matakuliah.
10. Menampilkan Informasi Dosen

                    echo $dosennew->tampilkanDosen();
Dengan memanggil metode tampilkanDosen(), kita akan menampilkan informasi dosen yaitu nama dan mata kuliah.

Kodingaan inheritance.php
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
                                                return "Nama : " . $this->getNama() . "<br> Mata Kuliah : " . 
                                                $this->matakuliah;
                                                      }
                                                  }
                                            // Buat objek dari kelas Dosen
                                            $dosennew = new Dosen("Anisa", "DIP");

                                            // Output tentang Objek
                                                      echo $dosennew->tampilkanDosen();
                                        ?>
<img width="383" alt="ij2" src="https://github.com/user-attachments/assets/f28a7a9e-092a-4ea4-af13-f0f49d9d3ed7">


# Polymorpism jobsheet2
1. Membuat Kelas Pengguna

                    class Pengguna {
                        protected $nama;
   
Class Pengguna berfungsi sebagai kelas induk yang memiliki atribut nama. Atribut nama diatur sebagai protected, artinya bisa diakses oleh kelas ini dan kelas turunannya (kelas yang mewarisi).

2. Konstruktor Kelas Pengguna

                    public function __construct($nama){
                        $this->nama = $nama;
                    }
Di sini kita membuat constructor yang digunakan untuk menginisialisasi atribut nama ketika sebuah objek dibuat dari kelas ini atau kelas turunannya. Saat objek dibuat, nilai yang diberikan untuk nama akan disimpan ke dalam atribut nama.

3. Metode aksesFitur

                    public function aksesFitur(){
                        return $this->nama;
                    }
Metode ini hanya mengembalikan nilai atribut nama. Ini metode dasar yang akan di-override (diganti) oleh kelas turunan.

4. Membuat Kelas Dosen yang Mewarisi Pengguna

                    class Dosen extends Pengguna {
                        private $matkul;
   
Kelas Dosen mewarisi sifat dari kelas Pengguna. Selain atribut nama yang diwarisi, kelas ini memiliki atribut baru matkul yang bersifat private, artinya hanya bisa diakses dari dalam kelas Dosen saja.

5. Konstruktor Kelas Dosen

                    public function __construct($nama, $matkul){
                        $this->nama = $nama;
                        $this->matkul = $matkul;
                    }
   
Konstruktor ini mengambil dua parameter: nama dan matkul.
Atribut nama diisi melalui pewarisan dari kelas Pengguna, dan atribut matkul diisi untuk menunjukkan mata kuliah yang diajarkan oleh dosen.
6. Override Metode aksesFitur di Kelas Dosen

                    public function aksesFitur(){
                        return "Nama Dosen $this->nama mengampu $this->matkul";
                              }
Di sini, metode aksesFitur di-override untuk memberikan informasi yang lebih spesifik terkait dosen, yaitu nama dosen dan mata kuliah yang diajarkan.

7. Membuat Kelas Mahasiswa yang Mewarisi Pengguna

                              class Mahasiswa extends Pengguna {
                                  private $Id_Mhs;
Kelas Mahasiswa juga mewarisi dari kelas Pengguna. Selain atribut nama, ada atribut baru bernama Id_Mhs yang disimpan secara private untuk identifikasi mahasiswa.

8. Konstruktor Kelas Mahasiswa

                              public function __construct($nama, $Id_Mhs){
                                  $this->nama = $nama;
                                  $this->Id_Mhs = $Id_Mhs;
                                 }
Konstruktor ini digunakan untuk menginisialisasi atribut nama dan Id_Mhs ketika sebuah objek mahasiswa dibuat.

10. Override Metode aksesFitur di Kelas Mahasiswa

                              public function aksesFitur(){
                                  return "Nama $this->nama dengan Id Mahasiswa $this->Id_Mhs";
                              }
Metode ini menampilkan informasi spesifik mengenai mahasiswa, yaitu nama dan ID Mahasiswa.

10. Membuat Objek dari Kelas Dosen dan Mahasiswa

                              $dosenbaru = new Dosen("Santi", "DIP");
                              $mhsbaru = new Mahasiswa("Anisa", "230302075");
Di sini, kita membuat dua objek:
$dosenbaru adalah objek dari kelas Dosen dengan nama "Santi" dan mengajar mata kuliah "DIP".
$mhsbaru adalah objek dari kelas Mahasiswa dengan nama "Anisa" dan ID Mahasiswa "230302075".

11. Menampilkan Data Dosen dan Mahasiswa

                              echo $dosenbaru->aksesFitur() . "<br>";
                              echo $mhsbaru->aksesFitur();
Kita memanggil metode aksesFitur dari objek dosen dan mahasiswa untuk menampilkan informasi mereka.


Kodingan Polymorpism.php
                    <?php
                    //definisi class Pengguna
                    class Pengguna {
                                  protected $nama; //property protected untuk nama

                                  //constructor untuk menginisialisasi nama
                                  public function __construct($nama){
                                      $this->nama = $nama;
                                  }

                                  //metode aksesFitur 
                                  public function aksesFitur(){
                                      return $this->nama;
                                  }
                    }
                    //class Dosen yang mewarisi class Pengguna
                    class Dosen extends Pengguna {
                        private $matkul; //property matkul yang private

                               //constructor untuk menginisialisasi matkul dan nama
                                  public function __construct ($nama, $matkul){
                                      $this->nama = $nama;
                                      $this->matkul = $matkul;
                                  }
          
                                  //implementasi metode aksesFitur
                                  public function aksesFitur(){
                                      return "Nama Dosen $this->nama mengampu $this->matkul";
                                  }
                              }
                    //class Mahasiswa yang mewarisi class Pengguna
                     class Mahasiswa extends Pengguna {
                                            private $Id_Mhs; //property Id_Mhs pakai private
   
                                            //constructor untuk memberikan isnisialisasi Id_Mhs dan nama
                                            public function __construct ($nama, $Id_Mhs){
                                                $this->nama = $nama;
                                                $this->Id_Mhs = $Id_Mhs;
                                            }

                                            //implementasi metode aksesFitur
                                            public function aksesFitur(){
                                                          return "Nama $this->nama dengan Id Mahasiswa $this->Id_Mhs ";
                                            }
                        }

                                        // instansi objek dari class dosen dan mahasiswa
                                        $dosenbaru = new Dosen("Santi", "DIP");
                                        $mhsbaru = new Mahasiswa("Anisa", "230302075");

                                        //pemanggilan metode aksesFitur
                                        echo $dosenbaru->aksesFitur() . "<br>"; //Menampilkan Output dosen
                              echo $mhsbaru->aksesFitur(); //menampilkan output mahasiswa
                     ?>
                     

<img width="283" alt="pj2" src="https://github.com/user-attachments/assets/98c0e913-9cec-4afe-b253-e82b6fc8902a">

# Abstraction jobsheet 2

1. Membuat Kelas Abstrak Pengguna

          abstract class Pengguna {
              abstract public function aksesFitur();
          }

Kelas abstrak Pengguna adalah sebuah blueprint atau cetak biru. Artinya, kita tidak bisa membuat objek langsung dari kelas ini. Kelas abstrak hanya menyediakan metode yang harus di-override (diterapkan ulang) oleh kelas turunannya.
Metode abstrak aksesFitur() hanya didefinisikan tanpa isi. Kelas yang mewarisi kelas Pengguna harus menyediakan implementasi dari metode ini.

3. Membuat Kelas Dosen yang Mewarisi Pengguna

          class Dosen extends Pengguna {
              public function aksesFitur() {
                  return "Fitur Masukan Nilai";
              }
          }
Kelas Dosen mewarisi dari kelas abstrak Pengguna.
Kelas ini mengimplementasikan metode aksesFitur(). Jadi, ketika aksesFitur() dipanggil pada objek Dosen, itu akan mengembalikan string "Fitur Masukan Nilai". Ini berarti dosen memiliki fitur untuk memasukkan nilai.

4. Membuat Kelas Mahasiswa yang Mewarisi Pengguna

          class Mahasiswa extends Pengguna {
              public function aksesFitur() {
                  return "Fitur Lihat Nilai";
              }
          }
   
Kelas Mahasiswa juga mewarisi dari kelas abstrak Pengguna.
Kelas ini mengimplementasikan metode aksesFitur() dengan cara yang berbeda. Ketika aksesFitur() dipanggil pada objek Mahasiswa, ia mengembalikan string "Fitur Lihat Nilai". Ini berarti mahasiswa memiliki fitur untuk melihat nilai.

5. Membuat Objek Dosen dan Mahasiswa

          $dosen = new Dosen();
          echo $dosen->aksesFitur() . "<br>";
   
Di sini, kita membuat objek $dosen dari kelas Dosen. Ketika kita memanggil metode aksesFitur() pada objek tersebut, hasilnya adalah "Fitur Masukan Nilai", karena kelas Dosen mengimplementasikan fitur ini.

          $mhs = new Mahasiswa();
          echo $mhs->aksesFitur();
   
Begitu juga, objek $mhs dibuat dari kelas Mahasiswa. Ketika kita memanggil metode aksesFitur() pada objek mahasiswa, hasilnya adalah "Fitur Lihat Nilai", karena fitur ini diimplementasikan oleh kelas Mahasiswa.

Kodingan Abstraction.php

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
                            eturn "Fitur Masukan Nilai";
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
                    $mhs = new Mahasiswa();
                    // Menampilkan output dari methode aksesFitur
                    echo $mhs->aksesFitur();
          ?>


Output :

<img width="359" alt="aj2" src="https://github.com/user-attachments/assets/fff4e461-57c2-4f10-9355-65cb1bfb8b30">


# Jobsheet 3
# 1 Inheritance

1. Membuat Kelas Person (Kelas Induk)

          class Person {
              protected $name;
   
Class Person adalah kelas induk yang memiliki satu atribut, yaitu $name. Atribut ini bersifat protected, yang artinya bisa diakses di dalam kelas ini dan juga kelas turunannya.

3. Konstruktor Kelas Person

          public function __construct($name){
              $this->name = $name;
          }
Konstruktor di kelas Person digunakan untuk menginisialisasi atribut $name. Setiap kali kita membuat objek dari kelas ini (atau kelas turunannya), kita harus memberikan nilai untuk name.

4. Metode getName

public function getName(){
    return $this->name;
}
Metode getName() digunakan untuk mendapatkan nilai dari atribut $name. Jadi, ketika kita memanggil metode ini, ia akan mengembalikan nama yang sudah disimpan di objek.

5. Membuat Kelas Student yang Mewarisi Person


class Student extends Person {
    public $studentID;
Class Student adalah kelas turunan yang mewarisi semua atribut dan metode dari kelas Person.
Selain itu, kelas ini menambahkan atribut baru, yaitu $studentID, yang digunakan untuk menyimpan ID mahasiswa.

6. Konstruktor Kelas Student

          public function __construct($name, $studentID){
              parent::__construct($name);
              $this->studentID = $studentID;
             }


Konstruktor di kelas Student menerima dua parameter: name dan studentID.
Bagian parent::__construct($name) digunakan untuk memanggil konstruktor dari kelas induk Person, yang bertugas menginisialisasi atribut name.
Atribut $studentID disimpan di dalam objek menggunakan $this->studentID.


7. Metode getStudentID

                              public function getStudentID(){
                                  return $this->studentID;
                              }
Metode getStudentID() digunakan untuk mendapatkan nilai dari atribut studentID.


7. Membuat Objek Student

          $studentnew = new Student("Anisatun", "2303");
Di sini, kita membuat objek $studentnew dari kelas Student dengan nama "Anisatun" dan ID "2303". Ini akan menginisialisasi atribut name dan studentID pada objek tersebut.
8. Menampilkan Data

                              echo "Nama: " . $studentnew->getName() . "<br>";
                              echo "ID: " . $studentnew->getStudentID();
                              
Pertama, kita memanggil metode getName() dari objek $studentnew untuk menampilkan nama yang disimpan di objek.
Kedua, kita memanggil metode getStudentID() untuk menampilkan ID mahasiswa yang disimpan di objek.

Kodingan inheritance.php:


          <?php
          //class parent
          class Person {
   
              protected $name; //protected bisa diakses semua kelas turunan

              //inisialisasi property name
              public function __construct($name){
                  $this->name = $name;
              }

              //metode agar mendapatkan name
              public function getName(){
                  return $this->name;
              }
          }
          //class student diwarisi class person
          class Student extends Person {
              //property tambahan khusus student
              public $studentID;

               // inisialisasi name dan studentID
              public function __construct($name, $studentID){
                          // Memanggil constructor dari kelas induk
                            parent::__construct($name);
                            $this->studentID = $studentID;
                             }

                         // Metode agar mendapatkan studentID
                                  public function getStudentID(){
                                      return $this->studentID;
                                  }
           }
                     
                              //instansisasi objek
                              $studentnew = new Student("Anisatun", "2303");
                              //Agar tampil data dari metode getName
                               echo "Nama: " . $studentnew->getName() . "<br>";
                              //Agar tampil data dari metode getStudentID
                              echo "ID: " . $studentnew->getStudentID();
          ?>
          

Outputnya:

<img width="344" alt="ij3" src="https://github.com/user-attachments/assets/0c79b40c-185f-4fd7-95ba-1b73119cb6f1">

# 2. Polymorphism

1. Membuat Kelas Person (Kelas Induk)

          class Person {
              protected $name; //property name yang protected
   
Kelas Person adalah kelas induk yang memiliki properti $name. Properti ini bersifat protected, artinya bisa diakses dari dalam kelas ini dan kelas turunannya.

3. Konstruktor Kelas Person

          public function __construct($name){
               $this->name = $name;
          }
   
Konstruktor ini digunakan untuk menginisialisasi properti $name saat objek dibuat. Saat objek dibuat, nilai name akan disimpan.

3. Metode getName

          public function getName(){
              return $this->name;
          }
   
Metode getName() digunakan untuk mengembalikan nilai dari properti $name. Kelas turunan dapat menggunakan atau mengganti metode ini.

5. Membuat Kelas Teacher yang Mewarisi Person

          class Teacher extends Person {
              public $teacherID;
Kelas Teacher adalah turunan dari Person. Selain mewarisi properti $name, kelas ini juga memiliki properti tambahan $teacherID yang menyimpan ID guru.

6. Konstruktor Kelas Teacher

          public function __construct ($name, $teacherID){
              parent::__construct($name);
              $this->teacherID = $teacherID;
          }
Konstruktor ini menginisialisasi properti $name menggunakan konstruktor kelas induk Person dengan kata kunci parent. Selain itu, properti $teacherID juga diinisialisasi.

7. Override Metode getName pada Kelas Teacher

          public function getName(){
              return "Teacher: " . $this->name;
                    }
Metode ini override metode getName() dari kelas induk. Sekarang, metode ini akan mengembalikan teks yang spesifik untuk guru dengan format "Teacher: [nama]".

8. Membuat Kelas Student yang Mewarisi Person

          class Student extends Person {
              public $studentID;
   
Kelas Student juga mewarisi properti $name dari kelas Person dan menambahkan properti baru $studentID untuk menyimpan ID mahasiswa.

8. Konstruktor Kelas Student

          public function __construct($name, $studentID){
              parent::__construct($name);
              $this->studentID = $studentID;
          }
Konstruktor ini juga menginisialisasi properti $name menggunakan konstruktor dari kelas induk, serta inisialisasi untuk properti $studentID.

9. Override Metode getName pada Kelas Student

          public function getName(){
              return "Student: " . $this->name;
          }
Sama seperti kelas Teacher, metode ini juga override metode getName(), tetapi kali ini menampilkan format untuk mahasiswa dengan "Student: [nama]".

10. Membuat Objek dari Teacher dan Student

          $teacherbaru = new Teacher("Nurul", "222");
          $studentbaru = new Student("Azizah", "333");
Di sini, kita membuat dua objek:
$teacherbaru adalah objek dari kelas Teacher dengan nama "Nurul" dan ID guru "222".
$studentbaru adalah objek dari kelas Student dengan nama "Azizah" dan ID mahasiswa "333".

11. Menampilkan Data Menggunakan Metode getName

          echo $teacherbaru->getName() . "<br>"; 
          echo $studentbaru->getName();
Untuk objek $teacherbaru, metode getName() menampilkan: "Teacher: Nurul".
Untuk objek $studentbaru, metode getName() menampilkan: "Student: Azizah".


Kodingan :
                     <?php
                    //definisi class person
                     class Person {
                                  protected $name; //property name yang protected

                               //untuk menginisialisasi name
                              public function __construct($name){
                              $this->name = $name;
                               }

                               //metode untuk mendapatkan name
                               public function getName(){
                                        return $this->name;
                                }
                              }
                              //class teacher yang mewarisi dari person
                              class Teacher extends Person {
                              public $teacherID; //property teacherID

                              //menginisialisasi property name dan teacherID
                               public function __construct ($name, $teacherID){
                                        parent::__construct($name);
                                        $this->teacherID = $teacherID;
                               }

                                  // Override metode getName untuk menampilkan format khusus Teacher
                                  public function getName(){
                                      return "Teacher: " . $this->name ;
                                  }

                                  //metode mendapatkan property teacherID
                                  public function getTeacherID(){
                                      return $this->teacherID;
                                            }
                              }
                    class Student extends Person {
                        public $studentID;

                        public function __construct($name, $studentID){
                            parent::__construct($name);
                            $this->studentID = $studentID;
                      }

                        // Override metode getName untuk menampilkan format khusus Student
                        public function getName(){
                            return "Student: " . $this->name;
                        }

                        //mendapatkan nilai dari property studentID
                        public function getStudentID(){
                            return $this->studentID;
                        }
                    }
                              //instansiasi objek dari class Teacher dan Student
                              $teacherbaru = new Teacher("Nurul", "222");
                              $studentbaru = new Student("Azizah", "333");

                              //Menampilkan hasil dari metode getName
                              echo $teacherbaru->getName() . "<br>"; //output Student: Nurul
                              echo $studentbaru->getName(); //output Student: Azizah

                    ?>

Output :
<img width="374" alt="pj3" src="https://github.com/user-attachments/assets/974adbd2-84b5-4355-a35a-71eb295900a3">


# 3. Encapsulation

1. Membuat Kelas Student dengan Properti Privat

                    class Student {
                        private $name;
                        private $studentID;
                       }
   
Properti $name dan $studentID bersifat private, artinya hanya bisa diakses dari dalam kelas Student itu sendiri. Untuk mengaksesnya dari luar kelas, kita perlu menggunakan metode getter dan setter.

3. Konstruktor Kelas Student

                    public function __construct($name, $studentID){
                        $this->name = $name;
                        $this->studentID = $studentID;
                    }
   
Konstruktor ini digunakan untuk menginisialisasi properti $name dan $studentID ketika objek Student dibuat.

4. Metode Getter untuk Mendapatkan Nilai

                              public function getName(){
                              return "Nama: " . $this->name;
                                        }

                              public function getStudentID(){
                                  return "ID: " . $this->studentID;
                    }
Metode getName() dan getStudentID() digunakan untuk mengakses nilai dari properti $name dan $studentID di luar kelas. Mereka mengembalikan nilai dalam format yang bisa dibaca oleh pengguna.

4. Metode Setter untuk Mengubah Nilai

                    public function setName($name){
                        $this->name = $name;
                    }

                    public function setStudentID($studentID){
                        $this->studentID = $studentID;
          }          
Metode setName() dan setStudentID() digunakan untuk mengubah nilai dari properti $name dan $studentID. Mereka menerima parameter baru dan mengatur ulang properti tersebut dengan nilai baru.
5. Instansiasi Objek Student

                    $studentbaru = new Student("sofiatun", "555");

Objek baru dari kelas Student dibuat dengan nama "Sofiatun" dan ID "555". Nilai ini diinisialisasi melalui konstruktor.
6. Menampilkan Data dengan Getter

                              echo $studentbaru->getName() . "<br>";
                              echo $studentbaru->getStudentID() . "<br>";

Data diakses menggunakan getter dan hasilnya ditampilkan:
          Output: "Nama: Sofiatun".
          Output: "ID: 555".

7. Mengubah Nilai dengan Setter

                    $studentbaru->setName("Nurul");
                    $studentbaru->setStudentID("2828");
Nama dan ID diubah menggunakan metode setter. Nilai baru yang dimasukkan:
Nama: "Nurul".
ID: "2828".

8. Menampilkan Data Setelah Diubah

          echo $studentbaru->getName() . "<br>";
          echo $studentbaru->getStudentID();
          
Setelah diubah, data ditampilkan lagi menggunakan getter:
          Output: "Nama: Nurul".
          Output: "ID: 2828".


Kodingan:
<?php
//buat kelas studen yang memiliki property nama dan studentId yg di privat
class Student{
              //property private
          private $name;
           private $studentID;

              //nama dan studentID di inisialisikan dengan constructor
              public function __construct($name, $studentID){
                  $this->name = $name;
                  $this->studentID = $studentID;
              }

              //metode Getter pada name
                        public function getName(){
                            return "Nama: " . $this->name;
                        }

              //metode Getter pada studentID
                    public function getStudentID(){
                            return "ID: " . $this->studentID;
                        }

                     //metode Setter pada name
                    public function setName($name){
                            $this->name = $name;
                        }

                        //Setter untuk StudentID
                    public function setStudentID($studentID){
                            $this->studentID = $studentID;
                        }
           }
                    //instansiasi objek dari class student
                    $studentbaru = new Student("sofiatun", "555");

                    // Mengakses data melalui metode getter
                    echo $studentbaru->getName() . "<br>";
                    echo $studentbaru->getStudentID() . "<br>";

                    // Mengubah data dengan metode setter
                    $studentbaru->setName("Nurul");
                    $studentbaru->setStudentID("2828");

                    // Menampilkan setelah diubah
                    echo $studentbaru->getName() . "<br>";
                    echo $studentbaru->getStudentID();
          ?>

Output:
<img width="356" alt="encapsulasij3" src="https://github.com/user-attachments/assets/8e5a11e1-a0de-4f69-bf2d-f30e0628c8de">

# 4. abstraction
1. Membuat Kelas Abstrak Course

          abstract class Course {
              abstract public function getCourseDetails();
          }
   
Kelas abstrak Course didefinisikan dengan satu metode abstrak, yaitu getCourseDetails().
Kelas abstrak adalah kelas yang tidak dapat diinstansiasi secara langsung. Metode abstrak di dalamnya harus diimplementasikan oleh kelas turunan.

3. Kelas OnlineCourse yang Mewarisi Course

          class OnlineCourse extends Course{
              private $pengajar;
              private $matakuliah;
    
              public function __construct($pengajar, $matakuliah){
                  $this->pengajar = $pengajar;
                  $this->matakuliah = $matakuliah;
              }

              public function getCourseDetails() {
                  return "Online Course dengan pengajar: $this->pengajar dan matkul $this->matakuliah.";
              }
          }

Kelas OnlineCourse mewarisi dari kelas abstrak Course.
Properti private $pengajar dan $matakuliah diinisialisasi melalui konstruktor.
Metode getCourseDetails() diimplementasikan untuk menampilkan rincian kursus online, sesuai dengan apa yang ditetapkan di kelas abstrak.

4. Kelas OfflineCourse yang Mewarisi Course

          class OfflineCourse extends Course {
              private $tempat;
              private $hari;
    
              public function __construct($tempat, $hari){
                  $this->tempat = $tempat;
                  $this->hari = $hari;
              }

              public function getCourseDetails() {
                  return "Offline Course dengan tempat: $this->tempat dan hari $this->hari.";
                        }
          }
Kelas OfflineCourse juga mewarisi kelas abstrak Course.
Properti private $tempat dan $hari diinisialisasi dengan konstruktor.
Metode getCourseDetails() diimplementasikan untuk menampilkan rincian kursus offline, mirip dengan OnlineCourse.

5. Instansiasi Objek dan Pemanggilan Metode

          $online = new OnlineCourse("Anis", "pweb");
          $offline = new OfflineCourse("Bimbel DPC", "kamis");

          echo $online->getCourseDetails() . "<br>";
          echo $offline->getCourseDetails();
          
Dua objek dibuat: satu untuk kelas OnlineCourse dan satu lagi untuk OfflineCourse.
Objek $online diciptakan dengan pengajar "Anis" dan matakuliah "pweb".
Objek $offline diciptakan dengan tempat "Bimbel DPC" dan hari "Kamis".

Metode getCourseDetails() dipanggil untuk masing-masing objek, yang akan menampilkan rincian kursus sesuai dengan tipe kursusnya.

Kodingan :
                    <?php
                    //class abstrak
                    abstract class Course {
                        abstract public function getCourseDetails();
                    }
                    //kelas onlinecourse diwarisi dari kelas Course
                    class OnlineCourse extends Course{
                        //property class onlinecourse yang private pengajar dan matkul
                        private $pengajar;
                        private $matakuliah;

                        //menginisialisasi property pengajar dan matkul oleh construct
                        public function __construct($pengajar, $matakuliah){
                            $this->pengajar = $pengajar;
                            $this->matakuliah = $matakuliah;
                        }

                        //implementasi metode getCourseDetails() berasal dari class abstrak course
                        public function getCourseDetails() {
                            return "Online Course dengan pengajar: $this->pengajar dan matkul $this->matakuliah.";
                        }
                    }
                    //class offlinecourse diwarisi class course
                              class OfflineCourse extends Course {
                                  //property yang di privat
                                  private $tempat;
                                  private $hari;

                                   //menginisialisasi property tempat dan hari oleh construct
                                  public function __construct($tempat, $hari){
                                      $this->tempat = $tempat;
                                      $this->hari = $hari;
                                  }

                                  //penerapan metode getCourseDetails() berasal class abstrak course
                                  public function getCourseDetails() {
                                      return "Online Course dengan tempat: $this->tempat dan hari $this->hari.";
                                  }
                              }
                              //instansiasi objek dari class Onlinecourse
                              $online = new OnlineCourse("Anis", "pweb");
                              //instansiasi objek dari class Offlinecourse
                              $offline = new OfflineCourse("Bimbel DPC", "kamis");
                              //memanggil metode getCourseDetails() asalnya objek online dan offline
                              echo $online->getCourseDetails() . "<br>";
                              echo $offline->getCourseDetails();

                              ?>

output:
<img width="359" alt="abstraction j3" src="https://github.com/user-attachments/assets/d4aec5d6-2fde-4f4e-b7ce-4db8d9d40065">




