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
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="c/fd.css">
<link rel="stylesheet" type="text/css" href="c/menu.css">
</head>
<body>
<header>
<nav>


 <div class="menu">

                 <a href="home_page.php">Home</a>
                  <div class="dropdown">  
     <a href="package.php"> Packages</a>
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
                <h1 class=c>Feedback</h1>
                    <hr >
                          
                       
                               
                          <h3 class=c1 >How do you rate your overall experience</h3>
     <?php
	if(isset($_POST['expierence']))
         {
	$con=new mysqli("localhost","root","","tour");
	$sql=$con->prepare("insert into feedback(expierence,name,contact_no,feedback_type,msg)
		values(?,?,?,?,?)");
	$sql->bind_param("ssiss",$cn,$ce,$cnt,$s,$ms);
	$cn=$_POST['expierence'];
	$ce=$_POST['name'];
	$cnt=$_POST['contact_no'];
	$s=$_POST['feedback_type'];
        $ms=$_POST['msg'];
	$sql->execute();
        
       
        }
	
?>
                           
              <form method=post class=c2>
                     <input type="radio" name="expierence" value="average">Average
                      <input type="radio"  name="expierence" value="good">Good
                      <input type="radio"  " name="expierence" value="excellent">Excellent <br>
 
                     

                    <input type="text" id="text2" placeholder="Your Name"  name=name required>
                    <input type="number"  id="text2" placeholder="Contact no" name=contact_no required><br>
                     <label class=c1>Feedback Type</label>
                          <input type="radio" name="feedback_type" value="comment">Comment
                      <input type="radio"  name="feedback_type" value="suggestion">Suggestion
                      <input type="radio"  " name="feedback_type" value="description ">Description <br> 
               
                  <textarea name="msg" placeholder="Feedback"  rows="5" required></textarea>
     <!--            <button class="submit">Send </button>   -->
                 <input type=submit value="send message" class="submit">
        </form>

         </center>
  

</header>
</body>
</html>
