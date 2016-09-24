# PHP-simple-hit-counter-with-session<br>
PHP simple hit counter with session<br>
Just copy and paste the code<br>
It's working with me fine<br>
Check it have any issues let me know<br>
Ping me on contact@anvarsadiqp.me<br>
wwww.anvarsadiqp.me/about/<br>

<?php
error_reporting(0);
session_start();
  if(isset($_SESSION['start'])){
	  if (file_exists('hit.txt')) {
          $fil = fopen('hit.txt', r);
          $dat = fread($fil, filesize('hit.txt'));
          echo "Hit:".$dat;
          }
    }
  else{
	  if (file_exists('hit.txt')){
	  $fil = fopen('hit.txt', r);
	  $dat = fread($fil, filesize('hit.txt')); 
	  echo $dat+1;
	  fclose($fil);
	  $fil = fopen('hit.txt', w);
	  fwrite($fil, $dat+1);
	  }
	$_SESSION['start'] = "started";
  }
?>

