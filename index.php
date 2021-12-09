<?php
$myfile = fopen("intro.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("intro.txt"));
fclose($myfile);
?>