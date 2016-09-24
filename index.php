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
