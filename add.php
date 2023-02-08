<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="reg.css">
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

<script>
	function checkpwd()
{
	var p = document.getElementById("p").value;
	var cp = document.getElementById("cp").value;
	if(p==cp)
		return true;
	else
		alert("Confirm Password not correct");
		return false;		
}
</script>

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

<div class="main">
<div class="content">
<h1 align="center">Add Account</h2>
  <form method="post" onsubmit="return checkpwd()" action="udetails.php">
  <table>
    <tr>
      <td>
        User Name
      </td>
      <td>
        <input type="text" name="username" placeholder="Enter Name.." required>
      </td>
    </tr>

    <tr>
      <td>
        Email
      </td>
      <td>
        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{3,}$" title="please fill email like abcd12@gmail.com" placeholder="Enter email" required>
      </td>
    </tr>
	

	<tr>
      <td>
        Contact No.
      </td>
      <td>
        <input type="text" name="contact" pattern="[0-9]{10}" title="please enter 10 numbers between[0-9]" placeholder="Enter contact number.." required>
      </td>
    </tr>
    <tr>
      <td>
        Password
      </td>
      <td>
        <input type="password" name="password" id="p" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" required>
      </td>
    </tr>

    <tr>
      <td>
        Confirm Password
      </td>
      <td>
        <input type="password" name="password" id="cp"  onchange="return checkpwd()" placeholder="Enter confirm password" required>
      </td>
    </tr>

    <tr>
      <td>
        Role
      </td>
      <td>
        <select name="role">
          <option value="admin" selected>Admin</option>
          <option value="user" >User</option>
        </select>
      </td>
    </tr>
 <td>Gender</td>
<td>
	<input type="radio" name="gender" value="Male" required>Male
	<input type="radio" name="gender" value="Female" required>Female
</td>
</tr> 
<tr>
   <td>   
        <input type="checkbox" name="remember"> Remember me
   </td>  
    </tr>
<tr>

</table>

<input type="submit" value="Submit">
<input type="reset" value="Cancel">
  </form>



</div>
</div>

</body>
</html> 
