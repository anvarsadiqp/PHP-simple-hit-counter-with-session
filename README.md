# PHP-simple-hit-counter-with-session<br>
PHP simple hit counter with session<br>
Create a file hit.txt at the location of script<br>
If you want you can set the hits yourself :)<br>
Just copy and paste the code<br>
It's working fine<br>
Check it have any issues let me know<br>
Ping me on contact@anvarsadiqp.me<br>
wwww.anvarsadiqp.me/about/<br>

<?php<br>
error_reporting(0);<br>
session_start();<br>
  if(isset($_SESSION['start'])){<br>
	  if (file_exists('hit.txt')) {<br>
          $fil = fopen('hit.txt', r);<br>
          $dat = fread($fil, filesize('hit.txt'));<br>
          echo "Hit:".$dat;<br>
          }<br>
    }<br>
  else{<br>
	  if (file_exists('hit.txt')){<br>
	  $fil = fopen('hit.txt', r);<br>
	  $dat = fread($fil, filesize('hit.txt')); <br>
	  echo $dat+1;<br>
	  fclose($fil);<br>
	  $fil = fopen('hit.txt', w);<br>
	  fwrite($fil, $dat+1);<br>
	  }<br>
	$_SESSION['start'] = "started";<br>
  }<br>
?>

