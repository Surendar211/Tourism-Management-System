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
		max-height:80%;
		margin:auto;
		margin-top:90px;
		margin-bottom:30px;
	}
	
	h2
	{
		margin-top:100px;
		margin-bottom:50px;
		color:black;
	}
	
	fieldset
	{
		max-height:500px;
		max-width:500px;
		margin:auto;
		background-color:lavender;
		border-width:10px;
		border-color:blue;
	}
	
		
	input[type=button] {
		background-color: red;
		color: white;
		margin:15px;
		padding: 12px 20px;
		border-radius: 4px;
		border-color:4px black;
		float: right;
		font-weight: 950;
	}
	input[type=button]:hover{
		background-color:green;
		color:white;
		font-weight: 950;
	}
	
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
	    $em = $_REQUEST["em"];
		$sql="DELETE FROM users WHERE u_email='$em'";
		if($con->query($sql) === TRUE)
		{
			
		
		
	
?>
<div class="main">
<div class="content">
<center>
	<form>
		<h3></h3>
		<fieldset>
		<h2>Record Deleted Sucessfully.</h2>
			<input type="button" value="Ok" onclick=window.open("muser.php","_self")>
		</fieldset>
		</form>
		</center>
</div>
</div>
</body>
</html> 
	<?php	}?>

		
