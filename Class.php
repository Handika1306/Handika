<?php

// File ini berisi definisi class Mahasiswa
class Mahasiswa {
    // Properti
    var string $nama;
    var string $npm;
    var string $jurusan;

    // Constructor untuk menginisialisasi data mahasiswa
    public function __construct(string $nama, string $npm, string $jurusan) {
        $this->nama = $nama;
        $this->npm = $npm;
        $this->jurusan = $jurusan;
    }

    // Function untuk menampilkan nama
    public function lihatNama() {
        echo "Nama: $this->nama" . PHP_EOL;
    }

    // Function untuk menampilkan NPM
    public function lihatNpm() {
        echo "NPM: $this->npm" . PHP_EOL;
    }

        // Function untuk menampilkan NPM
        public function lihatjurusan() {
            echo "jurusan: $this->jurusan" . PHP_EOL;
        }
}

?>

