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
<title> Contact  </title>
<link rel="stylesheet" type="text/css" href="c/cont.css">
<link rel="stylesheet" type="text/css" href="c/menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       
<nav>



 <div class="menu">
                 
                 <a href="home_page.php">Home</a>
        <div class="dropdown">    
     <a href="package.php"> Packages</a>

  <div class="dropdown-content">
      <a href="NorthIndia.php" >North India</a> <br/><br/>
      <a href="eastIndia.php" >East India</a> <br/><br/>
      <a href="southIndia.php">South India</a> <br/><br/>
      <a href="westIndia.php">West India</a>
   </div> 
  </div>  
                  <a href="contact_us.php" >Contact</a>
                  <a href="feedback.php" >Feedback</a>
               
            </div>

</nav>


<!-- contact section -->
<section id="contact-section">
<div class="container">
  <h2>Contact Us</h2><br/>
      <p>Email us and keep upto date with our latest information.</p>
        <div class="contact-form">

    <!-- first grid section -->
   <div>
       <i class="fa fa-map-marker "></i><span class="form-info"> 786 Galaxy Paradice,Jaipur, India </span><br>
       <i class="fa fa-phone"></i><span class="form-info"> Phone no +91 7865775678</span><br>
       <i class="fa fa-envelope"></i><span class="form-info"> dream_india786@gmail.com</span>
 </div>

   <!-- second grid section -->
    <?php
	if(isset($_POST['cname']))
         {
	$con=new mysqli("localhost","root","","tour");
	$sql=$con->prepare("insert into contact(cname,cemail,cont,sub,msg)
		values(?,?,?,?,?)");
	$sql->bind_param("ssiss",$cn,$ce,$cnt,$s,$ms);
	$cn=$_POST['cname'];
	$ce=$_POST['cemail'];
	$cnt=$_POST['cont'];
	$s=$_POST['sub'];
        $ms=$_POST['msg'];
	$sql->execute();
       
        }
	
?>
   <div>
        <form method=post>
         
             <input type="text" placeholder="Your Name" name=cname required>
             <input type="Email" placeholder="Email"  name=cemail  required>
             <input type="Number" placeholder="Contact no."  name=cont required>
             <input type="text" placeholder="Subject of the message" name=sub required>
             <textarea  placeholder="Message"  rows="5"  name=msg required></textarea>
        <!--     <button class="submit">Send Message</button>  -->
             <input type=submit value="send message" class="submit">
        </form>
   </div>
</div>
</div>
</section>

</body>
</html>
