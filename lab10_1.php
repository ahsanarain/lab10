<?php
$file_handle=fopen('hello.txt', 'r')
or
die("can't open file\n");
$read=fread($file_handle, filesize('hello.txt'));
$a=str_word_count($read);
$e=file_get_contents('hello.txt');
$b=count(explode(" ",$e));
if ($a==$b) {
	echo "equal<br>";
}
else{
	echo "not equal";
}

$lines = COUNT(FILE('hello.txt'));  
ECHO "There are". $lines. "lines";

?>