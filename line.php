<?
$client_id = "";
$client_secret = "";
$redirect_uri = "https://linebotoki.herokuapp.com/line.php";
$token = "";

function getToken($code){
    global $client_id, $client_secret,$redirect_uri;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.line.me/v2/oauth/accessToken",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "grant_type=authorization_code&code=".$code."&client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_uri,
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded"
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

function getProfile(){
    global $token;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.line.me/v1/profile",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer ".$token,
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

$obj = json_decode(getToken($_GET['code']),true);
$token = $obj['access_token'];
$obj_profile = json_decode(getProfile(),true);
?>
