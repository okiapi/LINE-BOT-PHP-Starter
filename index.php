<?
$url = 'https://api.line.me/v2/oauth/accessToken';
$data = array(
    'grant_type' => 'authorization_code',
    'code' => 'j0jy3kfwKOKSWrXYs6Cn',
    'client_id' => '1518868862',
    'client_secret' => 'e917bfe93dfcaac2ec636d38c1ac9b42',
    'redirect_uri' => 'https://linebotoki.herokuapp.com/'	
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
