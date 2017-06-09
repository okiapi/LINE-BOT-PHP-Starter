<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
function loginLine(){
    var win = window.open("https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1496511306&redirect_uri=http://www.kidkarnmai.com/line/auth/closeline.php&state=reftest001",'Popup','height=500,width=480');
    win.window.focus();
}
</script>
<body>
<a onclick="loginLine()"><img src="btn_login_base.png"></a>
</body>
</html>
