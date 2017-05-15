<?php
$access_token = '8AuSs4wJSTWkqIJTpVFdwFBA0h4g7a0a6WtHOB5mXUM/mzNYoqQAO4VhXyef4sUmnuW/1Bx1t7LAp6Xg5wkFI5+qrLXMSnDngi3DuCoEv4fbqP46II2fq2hlmOf2qkWy+RTp30ZWvyTyP/CynT539wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
