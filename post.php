<?
$url = 'https://api.line.me/v2/profile';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n" . 
                      "Authorization : Bearer {5OYWAG9qUIO9pG/ML5YiTcvERAkj4D4ApN0+zkdDZ+unN2i7dhcjjhhgGjTNcQLd9vlbR1qYo6XS3ohQ/MnvCn+OnE7y4m/ySchNTMZpBaUQzpz8VQDDPOWIqxOdkrwqqSFxzL7KeHALb6oVq4i7UFyJkyQKxupqlZ5I0qCNTE8=}",
        'method'  => 'GET'
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>
