<?php
// Class Buku
class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}";
    }
}

// Class turunan BukuDigital
class BukuDigital extends Buku {
    private $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile) {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    // Override method infoBuku
    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, Ukuran File: {$this->ukuranFile} MB";
    }
}

// Contoh penggunaan
$bukuCetak = new Buku("Belajar PHP", "John Doe");
echo $bukuCetak->infoBuku(); // Output: Judul: Belajar PHP, Penulis: John Doe

echo "\n"; // Baris baru

$bukuDigital = new BukuDigital("Belajar Laravel", "Jane Smith", 3);
echo $bukuDigital->infoBuku(); // Output: Judul: Belajar Laravel, Penulis: Jane Smith, Ukuran File: 3 MB
?>