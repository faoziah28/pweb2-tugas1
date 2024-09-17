# Jobsheet1
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


kodingan lengkapnuya:

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
 Definisi Kelas Mahasiswa:

          class Mahasiswa: Mendefinisikan kelas dengan nama Mahasiswa. Kelas ini berfungsi untuk mendefinisikan blueprint untuk objek mahasiswa.
          Properti (Atribut):

          public $nama: Menyimpan nama mahasiswa. Dengan aksesibilitas public, properti ini dapat diakses dari mana saja, baik dari dalam maupun luar kelas.
          public $nim: Menyimpan Nomor Induk Mahasiswa (NIM). Juga dapat diakses dari luar kelas.
          public $jurusan: Menyimpan jurusan mahasiswa. Dapat diakses dari luar kelas.

 Konstruktor:

          public function __construct($nama, $nim, $jurusan):
          Ini adalah metode khusus yang dijalankan ketika objek Mahasiswa dibuat.
          Parameter $nama, $nim, dan $jurusan digunakan untuk menginisialisasi properti objek.
          $this->nama, $this->nim, dan $this->jurusan diatur dengan nilai parameter yang diterima.

Metode tampilData:

          public function tampilData():
          Metode ini mengembalikan string yang berisi informasi tentang mahasiswa dalam format HTML.
          Menggunakan $this->nama, $this->nim, dan $this->jurusan untuk mengambil nilai dari properti objek.

Metode tampilData:

          public function tampilData():
          
          Menggunakan $this->nama, $this->nim, dan $this->jurusan untuk mengambil nilai dari properti objek.


kodingannya:
                    <?php
                    //membuat class mahasiswa
                        class Mahasiswa {
                              /*atribut atau properties berfungsi menyimpan
                              data atau keadaan dari objek*/
                              public $nama; //aksesbilitas PUBLIC bisa diakses dari mana saja
                              public $nim; 
                              public $jurusan; 
                        //construct berfungi Menginisialisasi atribut atau preoperty nama, nim, jurusan
                               public function __construct($nama, $nim, $jurusan){
                              $this->nama = $nama;
                              $this->nim = $nim;
                              $this->jurusan = $jurusan;
                    }

                              //metode atau function agar bisatampilData
                               public function tampilData(){
                                      return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
                                  }
                              }
                              //instansiasi objek mahasiswa1
                              $mahasiswa1 = new Mahasiswa("Anisa", "230302075", "komputer dan bisnis");
                              //menampilkan informasi tentang objek 
                              echo $mahasiswa1->tampilData(); //output : Nama: Anisa, NIM: 230302075, Jurusan: komputer dan bisnis
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
                                        $mahasiswa1 = new Mahasiswa ("Anisatun Faoziah", "230302075", "komputer dan bisnis");

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


# inheritance pd jobsheet 1
          1. Kelas Pengguna
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
           Atribut protected $nama: Menyimpan nama pengguna. protected berarti atribut ini dapat diakses oleh kelas Pengguna dan kelas yang mewarisinya, tapi tidak dapat diakses langsung dari luar kelas.

          Konstruktor __construct($nama): Metode ini dijalankan otomatis ketika objek Pengguna dibuat. Konstruktor ini menginisialisasi atribut nama dengan nilai yang diberikan saat objek dibuat.

Metode getNama(): Mengembalikan nilai dari atribut nama. Ini adalah metode getter yang memungkinkan akses kontrol terhadap data nama.

2. Kelas Dosen
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

   Atribut private $matakuliah: Menyimpan mata kuliah yang diajarkan oleh dosen. private berarti atribut ini hanya dapat diakses di dalam kelas Dosen.

Konstruktor __construct($nama, $matakuliah):

Memanggil konstruktor kelas induk Pengguna menggunakan parent::__construct($nama) untuk menginisialisasi atribut nama.
Menginisialisasi atribut matakuliah dengan nilai yang diberikan saat objek Dosen dibuat.
Metode getMatakuliah(): Mengembalikan nilai dari atribut matakuliah.

Metode tampilkanDosen():

Menggunakan metode getter getNama() dari kelas induk Pengguna untuk mendapatkan nama dosen.
Menyusun dan mengembalikan string yang menampilkan nama dan mata kuliah dosen.


3. Instansiasi dan Penggunaan
                                       $dosen1 = new Dosen("Anisa", "DIP");

                                        // Menampilkan informasi tentang objek
                                        echo $dosen1->tampilkanDosen();

   instansiasi:

$dosen1 = new Dosen("Anisa", "DIP");: Membuat objek baru dari kelas Dosen dengan nama "Anisa" dan mata kuliah "DIP". Ini memanggil konstruktor __construct dari kelas Dosen, yang pada gilirannya memanggil konstruktor dari kelas Pengguna.
Menampilkan Informasi:

echo $dosen1->tampilkanDosen();: Memanggil metode tampilkanDosen() pada objek $dosen1 untuk menampilkan informasi tentang dosen.




