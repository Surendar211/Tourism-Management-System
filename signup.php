<html>
	<head>
         <style>
 .menu {
    margin-left:450px;
}

</style>
                 <script>
                    function checkpwd() 
                     {
                       var upwd=document.getElementById("upwd").value;
                        var cp=document.getElementById("cp").value;
                           if(upwd==cp)
                               return true;
                           else
                            {
                                alert("Password didn't matched");
                                return false;
                              }
                       }
                </script>
		  <title>Sign Up</title>
                       <link rel="stylesheet" type="text/css" href="c/reg.css">
                       <link rel="stylesheet" type="text/css" href="c/menu.css">	
		
	</head>
	<body>
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
		<center>
		<h1 class="hs">Registration Form</h1>
		<p>Please fill the correct details</p>
                 <?php
	if(isset($_POST['uid']))
         {
	$con=new mysqli("localhost","root","","tour");
	$sql=$con->prepare("insert into users(username,upwd,u_email,gender,u_contact_no)
		values(?,?,?,?,?)");
	$sql->bind_param("sssss" ,$username,$upwd,$u_email,$s,$ms);
	$username=$_POST['username'];
	$upwd=$_POST['upwd'];
       
	$u_email=$_POST['u_email'];
         
	if($_POST['gender']=="Male")
            $s="Male";
          else
           $s="Female";
        $ms=$_POST['u_contact_no'];
	$sql->execute();
        echo alert("Value inserted");
        
       
        }
	
?>
		<form action=signphp.php method=post onsubmit="return checkpwd()" >
			
			<fieldset>
			<legend class="d1">Details</legend>
			<table cellpadding=10 cellspacing=10>
				<tr>
					<td>Name:</td>
					<td><input type=text name="username" required/></td>
					<td>Contact no:</td>
					<td><input type=number name="u_contact_no" required/></td>  
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type=email name="u_email" required/></td>
                                         
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type=password  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                              title="Must contain atleast one number and one uppercase and lowecaseletter, and atlest 8 or more characters." id="upwd" name="upwd" required/></td>
					<td>Confirm Password:</td>
					<td><input type=password id="cp" name="cp" required/></td>
				</tr>
		                 <tr>
					<td>Gender</td>
					<td><input type=radio name=gender value=Male>Male<br>
					    <input type=radio name=gender value=Female>Female<br></td>
				<tr>   
			</table>
			</fieldset>
			<br><br>
			<input class="bt" type=Submit value="Submit">
			<input class="bt" type=Reset value="Reset">
                        
		</form>
		</center>
	</body>
</html>
			 