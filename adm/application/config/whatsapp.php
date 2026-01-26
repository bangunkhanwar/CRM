<?php
$config['whatsapp_api'] = array(
    // Konfigurasi untuk DEVELOPMENT (local) & PRODUCTION
    'development' => array(
        'api_url' => 'http://api.bitbybit.id/api/v1/message/send',
        'api_key' => '13795fda8212aa6c0ce39d7f8d2b4cfe',
        'sender' => '6281320067001',
        'use_proxy' => false // Set true jika perlu proxy
    ),
    
    'production' => array(
        'api_url' => 'https://api.bitbybit.id/api/v1/message/send',
        'api_key' => '13795fda8212aa6c0ce39d7f8d2b4cfe',
        'sender' => '6281320067001',
        'use_proxy' => false
    ),
    
    'message_template' => "Halo {nama},\n\nKode OTP Anda: *{otp}*\nBerlaku 10 menit.\n\nMember Code: {member_code}\nCRM System"
);