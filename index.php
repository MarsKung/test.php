<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $url = 'http://localtest.me/local?username=admin&password=password';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    echo "This endpoint only accepts POST requests.";
}
?>