<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
 
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "https://api.line.me/v1/oauth/accessToken", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("grant_type=authorization_code&client_id=1518868862&client_secret=e917bfe93dfcaac2ec636d38c1ac9b42&code=ySkI9sEYf9gZqewjZsqm&redirect_uri=ttps://linebotoki.herokuapp.com/");
}
</script>

</body>
</html>
