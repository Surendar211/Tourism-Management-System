<?php
	session_start();
	
		$n=$_POST["n"];
		$s=$_POST["s"];
		$_SESSION["tp"]=$_POST["h"];
		$d=$_POST["d"];
		$con=new mysqli("localhost","root","","tour");
		$u=$_SESSION['u_email'];
		$p=$_SESSION['pcode'];
		$sql="insert into hotel values($n,'$d','$u','$s');";
		$con->query($sql);
		$sql="insert into make values('$p','$u')";
		$con->query($sql);
		header("location:payment.php");
	
?>