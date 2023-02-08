<html>
	<head>
    		<title>forget password</title>
                    <link rel="stylesheet" type="text/css" href="c/login.css">
                    <link rel="stylesheet" type="text/css" href="c/menu.css">
	</head>
	<body>
           <?php
                  $u_email="";
                  if(isset($_POST["u_email"]))
                   {
                     $con=new mysqli("localhost","root","","tour");
                     $u_email=$_POST["u_email"];
                     $sql="select *from users where u_email='".$u_email."' ";
                     $result=$con->query($sql);
                     if($result->num_rows==0)
                          echo"<p style='font-size:15px;background_color:yellow;font-weight:bold;color:red;'>Invalid entry</p>";
                     else if($result->num_rows==1)
                      {
                        $row=$result->fetch_assoc();
                        }
                    }
             ?>  
		<center>
		<form action=recover.php method=post>
		<fieldset border-width=200>
		<legend class="f1">Recover Password</legend>
		<table cellpadding=8>
			<tr>
				<td>Enter Email Id</td>
				<td><input type="email" name="u_email" id="u_email value="<?php echo $u_email ?>"/></td>
			</tr>
			
		</table>
		<br><br>
		<input type=submit class="btl" value="submit"> 
<!--		<a class = "btl" href=recover.php>Reset password</a>    -->
                 <br/><br/> <br> <br> <br>
		 <a class="btl" href="login_page.php">back to login page</a>
		<br><br>
		</fieldset>
		</form>
               
                   
		</center>
    
	</body>
</html> 

