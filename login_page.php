<?php
	session_start();
?>
<html>
	<head>
       <style>
 .menu {
    margin-left:450px;
}

</style>

		<title>Login</title>
                    <link rel="stylesheet" type="text/css" href="c/login.css">
                    
<link rel="stylesheet" type="text/css" href="c/menu.css">
		
	</head>
	<body>
                  <header>
                    <nav>



 <div class="menu">
                 
                 <a href="home_page.php">Home</a>
                  <div class="dropdown">  
     <a href="package.php" > Packages</a>
  <div class="dropdown-content">
      <a href="NorthIndia.php">North India</a> <br/><br/>
      <a href="eastIndia.php">East India</a> <br/><br/>
      <a href="southIndia.php">South India</a> <br/><br/>
      <a href="westIndia.php">West India</a>
    </div>
  </div>  
                  <a href="contact_us.php">Contact</a>
                  <a href="feedback.php">Feedback</a>
               
            </div>

</nav>
            
            <br>
             <br>

		<center>
		
		<form method=post>
		<fieldset border-width=200>
		<legend class="f1">Login</legend>
		<table cellpadding=8>
			<tr>
				<td>Email Id</td>
				<td><input type=email name="u_email"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type=password name="upwd"/></td>
			</tr>
                         <?php
                        if(isset($_POST["u_email"]))
                        {
                          $con=new mysqli("localhost","root","","tour");
                          $u_email=$_POST["u_email"];
                          $upwd=$_POST["upwd"];
                          $sql="select *from users where u_email='".$u_email."' and upwd='".$upwd."'";
                          $result=$con->query($sql);
                          if($result->num_rows==0)
                              echo "<p id=p1 style='font-size:15px;background-color:yellow;font-weight:bold; color:red;'> Invalid entries </p>";
                          else if($result->num_rows==1)
                          {  $_SESSION["login"]="login";
			    $_SESSION["u_email"]=$u_email;
			    $_SESSION["upwd"]=$upwd;
                            if(isset($_SESSION["pcode"]))
				 header("location:hotel.php");
			    else
                               
                           	 header("location:home_Page.php");
                            exit;
                          }
                       }
                  ?>
                        <tr>
				<td><a href="fp.php">Forget Password </a></td>
				
			</tr>
                                
		</table>
                               
		<br><br>
		<input class = "btl" type=submit value="Login" name="login" />
		<input class = "btl" type=reset value="Reset" onclick="document.getElementById('p1').innerHTML=''"/>
		<p>If not registered <a class="btl" href="Signup.php">Sign Up</a></p>
		<br><br>
		</fieldset>
		</form>
		</center>
           </header>
		
	</body>
</html> 

