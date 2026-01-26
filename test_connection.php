<?php
echo "<h2>Test Koneksi WhatsApp API</h2>";

// Test 1: DNS Resolution
echo "<h3>Test 1: DNS Resolution</h3>";
$ip = gethostbyname('api.bitbybit.id');
echo "IP Address: " . ($ip == 'api.bitbybit.id' ? '❌ DNS GAGAL' : "✅ $ip") . "<br>";

// Test 2: Port 443 Connectivity
echo "<h3>Test 2: Port 443 Test</h3>";
$fp = @fsockopen('api.bitbybit.id', 443, $errno, $errstr, 10);
if ($fp) {
    echo "✅ Port 443 TERBUKA<br>";
    fclose($fp);
} else {
    echo "❌ Port 443 TERTUTUP: $errstr ($errno)<br>";
}

// Test 3: HTTPS Access
echo "<h3>Test 3: HTTPS Access</h3>";
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
    'http' => [
        'timeout' => 10
    ]
]);

$result = @file_get_contents('https://api.bitbybit.id', false, $context);
echo "HTTPS Access: " . ($result === false ? '❌ GAGAL' : '✅ BERHASIL') . "<br>";
if ($result === false) {
    echo "Error: " . error_get_last()['message'] . "<br>";
}

// Test 4: cURL Test
echo "<h3>Test 4: cURL Test</h3>";
if (function_exists('curl_version')) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://api.bitbybit.id',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_NOBODY => true,
    ]);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    echo "cURL HTTP Code: $http_code<br>";
} else {
    echo "❌ cURL not enabled<br>";
}

// Test 5: Direct API Call
echo "<h3>Test 5: Direct API Call</h3>";
$post_data = [
    'api_key' => '13795fda8212aa6c0ce39d7f8d2b4cfe',
    'sender' => '6281320067001',
    'number' => '6282115413366',
    'message' => 'Test Connection from XAMPP',
    'type' => 'text'
];

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://api.bitbybit.id/api/v1/message/send',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($post_data),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
]);

$response = curl_exec($ch);
$error = curl_error($ch);
$info = curl_getinfo($ch);

echo "HTTP Code: " . $info['http_code'] . "<br>";
echo "cURL Error: " . ($error ?: 'None') . "<br>";
echo "Response: <pre>" . htmlspecialchars($response) . "</pre>";

curl_close($ch);
?>