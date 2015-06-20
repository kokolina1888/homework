<?php
header('Content-Type: text/html; charset=utf-8'); 
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Istanbul');
$date = date('d,m,Y');
$hour = date('h');
$minutes = date('i');
echo "Текущото време е $hour часа и $minutes минути на $date година.";

?>