<?php
header("Content-type: application/octet-stream");
$file = $_GET["file"] .".pdf";
#if(isset($_GET['path'])){
#	$filename .= $_GET['path'];
#	if(file_exists($filename)){
	#$mime_type = mime_content_type($filename);
	header("Content-Description: File Transfer");
	header("Content-type: application/download");
	header("Cache-Control: no-cache, must-revalidate");
	#header("Expires: 0");
	header("Content-Disposition: attachment; filename=" .urlencode($file));
	header("Content-Length: " . filesize($file));
	#header('Pragma: public');
	#readfile("files/" .$filename);
	flush();
	#readfile($filename);
	#die();
	$fp = fopen($file, "r");
	while(!feof($fp)){
		echo fread($fp, 65536);
		flush();
	}
fclose($fp);
?>