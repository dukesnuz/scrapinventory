<?php

DEFINE('DB_USER','scrapinventory');
DEFINE('DB_PASSWORD', 'Stacy1964!');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'scrapinventory');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


//error handler below used instead of usong die()
if(!$dbc)
   {
   triger_error('Could not connect to MySQL:' . mysqli_connect_error() );
   }else{
   mysqli_set_charset($dbc, 'utf8');
   }