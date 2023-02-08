<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">


<style>
	.main
	{
		height: 100%;
		width: 86%;
		float:left;
		background-image:url("t30.jpg");
		background-repeat:no-repeat;
		background-size:102% 100%;
		background-position:right;
		overflow-x: hidden;
	}
	
	.content
	{
		background-color:rgba(0, 0, 0, .6);
		border-radius: 20px;
		padding: 30px;
		width:60%;
		max-height:100%;
		margin:auto;
		margin-top:30px;
		margin-bottom:30px;
	}
	
	h2
	{
		margin-top:2px;
		margin-bottom:4px;
		color:black;
	}
	
	fieldset
	{
		max-height:600px;
		max-width:500px;
		margin:auto;
		background-color:00FFFF;
		border-width:10px;
		border-color:blue;
		margin-bottom:20px;
	}
	
	legend
	{
		font-family:forte;
		font-size:50;
		color:white;
		font-weight:950;
		-webkit-text-stroke:3px black;
	}
	
	input[type=button] {
		background-color: DarkGreen;
		color: white;
		margin:15px;
		padding: 12px 20px;
		border-radius: 4px;
		border-color:4px black;
		float: right;
		font-weight: 950;
	}
	input[type=button]:hover{
		background-color:khaki;
		color:black;
	}
	
	.content td
	{
		padding:10px;
		color:black;
		font-weight:bold;
		text-align: left;
		text-overflow:ellipsis;
		white-space:nowrap;
	}

	.content table
	{
		margin:auto;
		width: 80%;	
	}
	
	h1 {color:white;}
	
	img{
	  height:15%;
	  width:55%;
	  border-radius:50%;
	  border: 3px solid white;
	  margin:10%;
	  margin-left:28px;
  }
  
  
  figure{
	  margin:0px;;
  }
  figure:hover img
  { filter: blur(1px);
  }
  
  .i a:hover
  {
	  background-color:black;
  }
  
	
</style>

</head>
<body>

<div class="sidenav">
	<center>
	<figure class = "i"><a href="profile.php"><img src="a18.jpg" alt="profile"></a></figure>
	</center>
	<a href="mpack.php">Manage Package</a>
  <button class="dropdown-btn">User </button>
  <div class="dropdown-container">
    <a href="add.php">Add User</a>
    <a href="muser.php">Manage User</a>
  </div>
  <button class="dropdown-btn">View </button>
  <div class="dropdown-container">
    <a href="feed.php">View Feedback</a>
    <a href="pay.php">View Payment</a>
	<a href="hotel.php">View Hotel</a>
	<a href="contact.php">View Contacts</a>
  </div>
  <a href="lconfirm.php">Logout</a>
</div>
<script type="text/javascript" src="nav.js"></script>
<?php

		$con=new mysqli("localhost","root","","tour");
		$sql1="select *from users";
		$result=$con->query($sql1);
		$email=$_POST['email'];
		$em = $_REQUEST["em"];
		if($result->num_rows>0)
			while($row=$result->fetch_assoc())
			{
				if($email==$row['u_email'])
				{
					if($em!=$row['u_email'])
					{
					echo "<script>alert('$email is already taken by another user. Please enter new one.')</script>";
					echo "<script>window.open('muser.php','_self')</script>";
					exit;
					}
				}
			}
?>

<?php

		$con=new mysqli("localhost","root","","tour");
	    $em = $_REQUEST["em"];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$role=$_POST['role'];
		$contact=$_POST['contact'];
		$sql="UPDATE users SET username='$username',upwd='$password',u_email='$email',gender='$gender',role='$role',u_contact_no='$contact' WHERE u_email='$em'";
		if($con->query($sql) === TRUE)
		{
		
?>

<div class="main">
<div class="content">
<center>
	<form>
		<h1>Updated Record Sucessfully.</h1>
		<fieldset>
		<h2>Updated Deatils</h2>
			<legend>Details</legend>
			<table cellpadding=8>
			
				<tr>
					<td>Username </td>
					<td>:</td>
				<td><?php echo $_POST["username"] ?></td>
				</tr>
				<tr>
					<td>Email Id</td>
					<td>:</td>
					<td><?php echo $_POST["email"] ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><?php echo $_POST["password"] ?></td>
				</tr>
				<tr>
					<td>Role</td>
					<td>:</td>
					<td><?php echo $_POST["role"] ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><?php echo $_POST["gender"] ?></td>
				</tr>
				<tr>
					<td>Contact no.</td>
					<td>:</td>
					<td><?php echo $_POST["contact"] ?></td>
				</tr>
			</table>
			<input type="button" value="Ok" onclick=window.open("muser.php","_self")>
		</fieldset>
		</form>
		</center>
</div>
</div>
</body>
</html> 
		<?php   }?>		