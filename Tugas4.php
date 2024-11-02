<?php
function sapaan($nama = "Tamu", $waktu = null) {
    // Pesan bebas yang akan ditambahkan setelah sapaan utama
    $pesanBebas = "Semoga harimu menyenangkan!";

    // Cek parameter waktu dan buat sapaan sesuai
    if ($waktu === "pagi") {
        return "Selamat pagi, {$nama}! {$pesanBebas}";
    } elseif ($waktu === "siang") {
        return "Selamat siang, {$nama}! {$pesanBebas}";
    } elseif ($waktu === "sore") {
        return "Selamat sore, {$nama}! {$pesanBebas}";
    } elseif ($waktu === "malam") {
        return "Selamat malam, {$nama}! {$pesanBebas}";
    } else {
        // Jika waktu tidak diisi atau tidak cocok, gunakan sapaan umum
        return "Halo, {$nama}! Selamat datang!";
    }
}

// Contoh penggunaan fungsi
echo sapaan("Andi", "pagi"); // Output: Selamat pagi, Andi! Semoga harimu menyenangkan!
echo "\n"; // Baris baru
echo sapaan("Budi", "malam"); // Output: Selamat malam, Budi! Semoga harimu menyenangkan!
echo "\n"; // Baris baru
echo sapaan(); // Output: Halo, Tamu! Selamat datang!
echo "\n"; // Baris baru
echo sapaan("Citra"); // Output: Halo, Citra! Selamat datang!
?>