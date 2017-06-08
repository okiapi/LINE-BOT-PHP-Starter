<?
$url = 'GET https://api.line.me/v2/profile';
$data = array(
    'Authorization' => 'Bearer {lExPegIfEn52CQaozHfqfX4HJErjh3QSP78ZLzrIkTem7GTlpCzVEpqzlqMiii}'
);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>
