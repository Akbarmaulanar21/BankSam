<?php
// Konfigurasi email
$tujuan_email = "banksam2023@gmail.com"; // Ganti dengan alamat email tujuan
$subjek_email = "Pesan dari Situs Web Anda"; // Ganti dengan subjek email yang diinginkan
$dari_email = "noreply@situswebanda.com"; // Ganti dengan alamat email pengirim
$nama_pengirim = "Nama Pengirim"; // Ganti dengan nama pengirim

// Tangkap data dari formulir
$nama = $_POST['nama']; // Ganti dengan nama input untuk nama
$email = $_POST['email']; // Ganti dengan nama input untuk email
$pesan = $_POST['pesan']; // Ganti dengan nama input untuk pesan

// Membuat pesan email
$pesan_email = "Pesan dari: $nama\n";
$pesan_email .= "Email: $email\n\n";
$pesan_email .= "Pesan:\n$pesan";

// Mengirim email
$hasil_kirim = mail($tujuan_email, $subjek_email, $pesan_email, "From: $nama_pengirim <$dari_email>");

// Memeriksa apakah email berhasil terkirim
if ($hasil_kirim) {
    echo "Pesan Anda berhasil terkirim.";
} else {
    echo "Terjadi kesalahan saat mengirim pesan.";
}
