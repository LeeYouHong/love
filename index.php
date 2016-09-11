<?php

date_default_timezone_set('Asia/Shanghai'); 

$ip = $_SERVER["REMOTE_ADDR"];
$myfile = fopen("log.txt", "a");
fwrite($myfile, date('Y-m-d H:i:s').'  '.$ip."\r\n");

$file = file_get_contents('./index1.html', FILE_USE_INCLUDE_PATH);
echo $file

?>