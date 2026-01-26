<?php
$config['whatsapp_api'] = array(
    'development' => array(
        'api_url' => 'https://api.bitbybit.studio/whatsapp/api/v3.1/message/template',
        'api_key' => '13795fda8212aa6c0ce39d7f8d2b4cfe',
        'sender' => '6281320067001',
        'use_proxy' => false
    ),

    'production' => array(
        'api_url' => 'https://api.bitbybit.studio/whatsapp/api/v3.1/message/template',
        'api_key' => '',
        'sender' => '6281320067001',
        'use_proxy' => false
    )
);

$config['whatsapp_template'] = array(
    'name'   => 'new_otp_template_indo',
    'source' => 'AUTH'
);
