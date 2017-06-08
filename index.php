<?
//API Url
$url = 'https://api.line.me/v2/oauth/accessToken';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'grant_type' => 'authorization_code',
    'code' => 'j0jy3kfwKOKSWrXYs6Cn',
    'client_id' => '1518868862',
    'client_secret' => 'e917bfe93dfcaac2ec636d38c1ac9b42',
    'redirect_uri' => 'http://192.168.11.207/linelogin/line.php'	
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);
?>
