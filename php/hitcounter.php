<?php
#open hitcounter txt file and print value
$count_my_page = ("php/hitcounter.txt");
$fp = fopen($count_my_page , "r");
$hits = intval(trim(fread($fp, filesize($count_my_page))));
echo $hits;
fclose($fp);	
?>
