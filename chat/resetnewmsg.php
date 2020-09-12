<?php
$dosyam = fopen('newmsg.txt','a+');
$text = fgets($dosyam);
$text = 0;
fputs($dosyam,$text);
fclose($dosyam);
?>