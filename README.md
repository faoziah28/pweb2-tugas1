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





