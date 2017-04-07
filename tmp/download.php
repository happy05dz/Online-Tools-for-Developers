<?php
//used in Convert Images to download converted image

if ((isset($_GET["file"])) && ($_GET["file"])) {
$file = '../'.$_GET["file"];	
header("Cache-Control: private");	
header('Content-Type: application/force-download');
header("Content-Transfer-Encoding: Binary"); 
header('Content-Length: ' . filesize($file));
header("Content-disposition: attachment; filename=\"" . basename($file) . "\""); 
readfile($file); 
unlink($file); //to delete the file that you generated
}
?>