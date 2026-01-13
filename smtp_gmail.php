<?php
// File: smtp_gmail.php
// Contoh pengiriman email menggunakan Gmail SMTP dengan PHPMailer

// Pastikan PHPMailer sudah terinstall via Composer atau manual
// Jika via Composer, pastikan file vendor/autoload.php ada
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'elcorpsdev@gmail.com'; // Ganti dengan email Anda
    $mail->Password   = 'rgjw nuiv imnc moqm';    // Gunakan App Password Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Pengaturan email
    $mail->setFrom('elcorpsdev@gmail.com', 'Elcorps Dev'); // Ganti dengan email dan nama Anda
    $mail->addAddress('recipient@example.com', 'Nama Penerima');
    $mail->Subject = 'Tes Email SMTP Gmail';
    $mail->Body    = 'Ini adalah email percobaan menggunakan Gmail SMTP dan PHPMailer.';

    // Kirim email
    $mail->send();
    echo 'Pesan berhasil dikirim.';
} catch (Exception $e) {
    echo "Pesan gagal dikirim. Error: {$mail->ErrorInfo}";
}

// Catatan:
// - Ganti 'your_gmail@gmail.com' dan 'your_app_password' dengan data Anda.
// - Untuk password, gunakan App Password dari Google (bukan password biasa).
// - Jika belum punya PHPMailer, install dengan Composer: composer require phpmailer/phpmailer
