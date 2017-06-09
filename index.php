<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
function loginLine(){
    var win = window.open("https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1518868862&redirect_uri=https://linebotoki.herokuapp.com/line.php&state=123",'Popup','height=500,width=480');
    win.window.focus();
}
</script>
<body>
<a onclick="loginLine()"><img src="btn_login_base.png"></a>
</body>
</html>
