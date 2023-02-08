<html>
	<head>
			
	</head>
	<body>
          <h1 style="color:green;">Payment Successful!</h1>
	 <?php 
           session_start();
            if(isset($_POST["u_email"])){
	    $con=new mysqli("localhost","root","","tour");
            $p=$_SESSION["tp"];
	    $sql=$con->prepare("insert into payment(p_amt,exp_date,card_no,ctype,u_email) values(?,?,?,?,?)");
	    $sql->bind_param("sssss",$p,$date,$cno,$card,$uname);
	    $card=$_POST['card'];
	    $uname=$_POST['u_email'];
	    $cno=$_POST['card_no'];
	    $date=$_POST['exp_date'];
	    $sql->execute();
            
	    $l=$con->insert_id;
          }
 	?>

	
		<table align=center cellpadding=5 cellspacing=5>
		<?php
			$u_email=$_SESSION["u_email"];
			$pcode=$_SESSION["pcode"];
			$filename="data1.txt";
			$fp = fopen($filename, 'w');//opens file in write-only mode   
  
			$con=new mysqli("localhost","root","","tour");
			
			$sql="select * from users where u_email='$u_email'";
			$res=$con->query($sql);
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
				echo"<tr>";
				echo"<td>User Name</td>";
				echo"<td>".$row["username"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'User Name:'.$row["username"] );
				echo"<tr>";
				echo"<td>User Email</td>";
				echo"<td>".$row["u_email"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'User Email:'.$row["u_email"] );
				echo"<tr>";
				echo"<td>Contact Number</td>";
				echo"<td>".$row["u_contact_no"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Contact Number:'.$row["u_contact_no"]);
			}
			$sql="select * from package where p_code='$pcode'";
			$res=$con->query($sql);
			
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
				echo"<tr>";
				echo"<td>Package Name</td>";
				echo"<td>".$row["pname"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Package Name:'.$row["pname"]);
				echo"<tr>";
				echo"<td>Package Code</td>";
				echo"<td>".$row["p_code"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Package Code:'.$row["p_code"]);
				echo"<tr>";
				echo"<td>Package Amount</td>";
				echo"<td>".$row["price"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Package Amount:'.$row["price"]);
				echo"<tr>";
				echo"<td>Package Duration(in days)</td>";
				echo"<td>".$row["duration"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Package Duration(in days):'.$row["duration"]);
				echo"<tr>";
				echo"<td>Number Of Travelers</td>";
				echo"<td>".$_SESSION["nt"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Number Of Travelers:'.$_SESSION["nt"]);
			}
			$sql="Select * from hotel";
			$res=$con->query($sql);
			$r="";
			if($res->num_rows>0){
				while($row=$res->fetch_assoc()){
					$r=$row;
				}
				echo"<tr>";
				echo"<td>Date Of Start Of Tour</td>";
				echo"<td>".$r["start_date"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Date Of Start Of Tour:'.$r["start_date"]);
				echo"<tr>";
				echo"<td>Number Of Rooms</td>";
				echo"<td>".$r["room_no"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Number Of Rooms:'.$r["room_no"]);
			}
			
			$sql="select * from payment where pid=".$l;
			$res=$con->query($sql);
			
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
				echo"<tr>";
				echo"<td>Payment Id</td>";
				echo"<td>".$row["pid"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Payment Id:'.$row["pid"]);
				echo"<tr>";
				echo"<td>Card Type</td>";
				echo"<td>".$row["ctype"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Card Type:'.$row["ctype"]);
				echo"<tr>";
				echo"<td>Total Amount</td>";
				echo"<td>".$row["p_amt"]."</td>";
				echo"</tr>";
				fwrite($fp,"\n".'Total Amount:'.$row["p_amt"]);
			}
			fwrite($fp,"\n\nFor Any Query Contact us On +91 7865775678 or email us on dream_india786@gmail.com");
			fclose($fp);
			
		?>
		
		</table>
                <br>
		<form action=f1.php method=post>
		<input type=submit value="download details" name=d style="margin-left:500px;">
                
                <input type=button value="OK" name=d onclick=window.open("feedback.php") style="margin-left:50px;">
		</form>
	</body>
</html>	