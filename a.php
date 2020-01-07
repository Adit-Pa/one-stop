<?php
function mac(){
ob_start();
system('ipconfig/all');
$mycom=ob_get_contents();
ob_clean();
$findme="physical";
$pmac=strpos($mycom,$findme);
$mac=substr($mycom,($pmac+36),17);
echo $mac;
}
mac();
?>