<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Email Configuration for XAMPP with Gmail SMTP
|--------------------------------------------------------------------------
*/

$config = array();

// Konfigurasi Gmail SMTP
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com'; // atau 'tls://smtp.gmail.com'
$config['smtp_port'] = 465; // 465 untuk SSL, 587 untuk TLS
$config['smtp_user'] = 'elcorpsdev@gmail.com';
$config['smtp_pass'] = 'rgjw nuiv imnc moqm';
$config['smtp_timeout'] = 30;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['wordwrap'] = TRUE;
$config['smtp_crypto'] = 'ssl'; // 'ssl' atau 'tls'

// Untuk debugging (0 = off, 1-4 = level debugging)
$config['smtp_debug'] = 2; // Set ke 2 untuk lihat error

// Validation
$config['validation'] = TRUE;