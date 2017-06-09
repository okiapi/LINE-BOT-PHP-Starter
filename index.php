<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
$.ajax({ 
   type: "POST",
   dataType: "jsonp",
   data: {
		grant_type: "authorization_code",
		client_id: "1518868862",
		client_secret: "e917bfe93dfcaac2ec636d38c1ac9b42",
		code: "1Ii0Jts2NFeZKHbx8Yrg",
		redirect_uri: "https://linebotoki.herokuapp.com/"   
   },
   contentType: "application/x-www-form-urlencoded",
   url: "https://api.line.me/v1/oauth/accessToken",
   success: function(data){        
     alert(data);
   }
});
</script>
<body>
</body>
</html>
