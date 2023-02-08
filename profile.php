<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">

<style>
	.main
	{
		height: 100%;
		width: 86%;
		float:left;
		background-image:url("t13.jfif");
		background-repeat:no-repeat;
		background-size:150% 100%;
		background-position:center;
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
	
	h1
	{
		margin-top:20px;
		margin-bottom:20px;
		color:white;
		font-size:50px;
	}
	
	fieldset
	{
		max-height:600px;
		max-width:500px;
		margin:auto;
		background-color:lavender;
		border-width:10px;
		border-color:blue;
	}
	
	.content td
	{
		padding:12px;
		color:black;
		font-weight:bold;
		text-align: left;
		text-overflow:ellipsis;
		white-space:nowrap;
		font-size:20px;
	}

	.content table
	{
		margin:20px;
		width: 80%;	
	}
	
	.i img{
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
  .im
  {
	  height:120px;
	  width:120px;
	  border-radius:50%;
	  margin-top:20px;
	  margin-bottom:20px;
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
		$em = $_SESSION["email"];
		$sql="select *from users where u_email='$em'";
		$result=$con->query($sql);
		if($result->num_rows>0)
			while($row=$result->fetch_assoc())
	
		{ ?>

<div class="main">
<div class="content">
<center>
	<form>
		<h1>Profile</h1>
		<fieldset>
			<img class="im" src="a5.jfif" alt="profile">
			<center>
			<table cellpadding=8>
				<tr>
					<td>Username </td>
					<td>:</td>
				<td><?php echo $row["username"];?><td>
				</tr>
				<tr>
					<td>Email Id</td>
					<td>:</td>
					<td><?php echo $row["u_email"];?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><?php echo $row["upwd"];?></td>
				</tr>
				<tr>
					<td>Role</td>
					<td>:</td>
					<td><?php echo $row["role"];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><?php echo $row["gender"];?></td>
				</tr>
				<tr>
					<td>Contact no.</td>
					<td>:</td>
					<td><?php echo $row["u_contact_no"];?></td>
				</tr>
		<?php }?>
			</table>

		</fieldset>
		</form>
		</center>
		
</div>
</div>
</body>
</html> 
				