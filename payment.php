<html>
	<head>
		<title>Payment Form</title>
		<style>
		body
{
	margin :0;
	padding :0;
	font-family : sans-serif ;
                  background-image : url('pay3.jpg'); 
	background-size:cover;
	background-repeat:no repeat ;
                  background-position:center;

}
.paymentForm
{
	width: 400px ;
                  box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
	background:#999;

	padding:20px;
	margin:20px;
	border:8px solid #000000;
	text-align: center ;
}
.paymentForm1
{
	
        max-width:600px;
	height:500px;
        color:white;
        font-size:20px;
        line-height:40px;
        
                  box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
	background:#999;

	padding:20px;
	margin:20px ;
	border:8px solid #000000;
	text-align: center ;
}
.payment form H1
{
color:#1c8adb;
margin-bottom:30px;
}
.input-box
{
border-radius:20px;	
padding:10px;
margin:10px;
width:100%;
border:1px solid  #999;
outline : none;
}
img
{
width:70px;
margin-TOP : - 50px;
border:2px solid  #999;
}
.pt {
      margin-top:50px;
      padding:20px;
   }
.pt td
        {  
           text-align:left;
           font-size:20px;
           padding:9px;
           color:white;
          
      }
   
		
		</style>
	</head>
	<body>
                 
        <center>
        
		<table >

			<tr>
			   <td>
                    <div class ="paymentForm1">
                    <table  class="pt">
         <?php
               session_start();
			$con=new mysqli("localhost","root","","tour");
			
                        $u=$_SESSION['u_email'];

			$sql="Select * from users where u_email='$u'";
			$result=$con->query($sql);
			echo"<tr>";
			if($result->num_rows>0){
				$row=$result->fetch_assoc();
				    echo"<td>";
                                    echo"user name:</td>";
				    echo "<td>".$row["username"]."</td>";
				    echo"</td>";
				}
			echo"</tr>";
		 $p=$_SESSION['pcode'];
			echo"<tr>";
			$sql="Select * from package where p_code='$p'";
			$result=$con->query($sql);
			
			if($result->num_rows>0){
				$row=$result->fetch_assoc();
				    echo"<td>package code:</td>";
					echo"<td>".$row["p_code"]."</td></tr>";
					echo"<tr><td>package name:</td>";
					echo"<td>".$row["pname"]."</td></tr>";
					  echo"<tr><td>Number of Travelers:</td>";
					echo"<td>".$_SESSION["nt"]."</td></tr>";
                                           echo"<tr><td>Total price:</td>";
					echo"<td>".$_SESSION["tp"]."</td></tr>";	
				}

		         

			$sql="Select * from hotel  where u_email ='$u'";
			$result=$con->query($sql);
			echo"<tr>";
			$sql="Select * from hotel";
			$res=$con->query($sql);
			$r="";
			if($res->num_rows>0){
				while($row=$res->fetch_assoc()){
					$r=$row;
				}
				 echo"<td> Start date of tour:</td>";
			   	 echo"<td>".$r["start_date"]."</td></tr>";
			   	 echo"<tr><td> No of room:</td>";
			   	 echo"<td>".$r["room_no"]."</td>";
			}
			
			echo"</tr>";
			
		?>
                </table>
                </div>
		</td>
			<td>
                     <div class ="paymentForm">

	
			<h1> Payment Now</h1>
			<img src="P/pay2.png">
			<form action="show.php" method="post" onsubmit="return validate()">
				CARD :<br>
					<input type="radio" name="card" value="Credit" required>CREDIT 
					<input type="radio" name="card" value="Debit" required>DEBIT <br>
				<input type ="email" class="input-box" placeholder="Enter Email" name=u_email value="<?php echo $_SESSION['u_email']; ?>" required>
				CARD NO: <br>
				<input type="TEXT"class="input-box" placeholder="Card No" name="card_no" required>
				EXPIRY DATE:<br>
				<input type="DATE"  class="input-box" placeholder="MM/YY" id="d" name="exp_date" required>

				<p><span><input type="checkbox"></span>I agree to pay </p>
				<input type="submit" class="pay-btn" value="Proceed" required>



                       </form>
                  <script>
                   function validate(){
					 var inpDate = new Date(document.getElementById("d").value);
					 var currDate = new Date();
if(inpDate.setHours(0, 0, 0, 0) <= currDate.setHours(0, 0, 0, 0)){
						alert("Wrong Date");
						return false;
					}
					return true;
				}
              </script>
                   
		</div>
		</td>
			</tr>
				</table> 
                               
	
         </center>
	</body>
</html>

	 