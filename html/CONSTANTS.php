<?php

if($_SERVER['HTTP_HOST'] == 'localhost' || '127.0.0.1')
{
  // For local testing. Remove after complete development.
  define('SITE_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/cetMakerParty2017Website/html/');

}
else
{

  define('SITE_SERVER_BASE', 'https://'.$_SERVER['HTTP_HOST'].'/');

}

?>
