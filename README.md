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
                              return "Nama : $this->nama <br>dengan NIP $this->nip <br>Matakuliah: $this->matakuliah.";
                              }
                    }
                    $Dosen1 = new Dosen ("Anisa", "230302075", "Desain Interaksi Pengguna");
                    echo $Dosen1->tampilkanDosen();
          ?>

<img width="384" alt="tgs1" src="https://github.com/user-attachments/assets/6c4c8163-09f4-4e98-8963-5dbffaff0bfa">

          
          






