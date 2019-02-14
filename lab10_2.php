<?php
$file_handle=fopen('hello.txt', 'a')
or
die("can't open file\n");
$data='16sw16';
fwrite($file_handle, $data);
$handle=fopen('hello.txt', 'r');
$read=fread($handle, filesize('hello.txt'));
echo $read;
?>