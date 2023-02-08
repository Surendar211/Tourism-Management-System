<?php
	if(isset($_POST["d"])){
		$file="data1.txt";
		$tp=basename($file);
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.$tp.'"');
		readfile($tp);
            
	}
?>