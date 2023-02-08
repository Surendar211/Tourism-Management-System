<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="muser.css">
<style>
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
			$sql="Select * from users";
			$result=$con->query($sql);
?>

<div class="main">
	<div class="content">
		<h1 align="center">Manage User</h1>
		<table>
		<thead bgcolor="violet">
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Gender</th>
			<th>Password</th>
			<th>Contact No.</th>
			<th colspan="2">Action</th>
		</thead>
		<?php
			if($result->num_rows>0)
				while($row=$result->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row["username"]."</td>";
					echo "<td>".$row["u_email"]."</td>";
					echo "<td>".$row["role"]."</td>";
					echo "<td>".$row["gender"]."</td>";
					echo "<td>".$row["upwd"]."</td>";
					echo "<td>".$row["u_contact_no"]."</td>";  ?>
					
				<td><button class="btn" onclick=window.open("update.php?em=<?php echo $row["u_email"]; ?>","_self")>Update</button></td>
				<td><button class="btn" onclick=window.open("uconfirm.php?em=<?php echo $row["u_email"];  ?>","_self")>Delete</button></td>
				<?php		}?>	
							
	</table>



</div>
</div>
</body>
</html> 