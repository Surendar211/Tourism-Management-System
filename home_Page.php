<?php 
    session_start(); 
    ?>
<!DOCTYPE html>
<html>
<head>
     
     <title> Travel and Tourism</title>
 <link rel="icon"  href="favicon_io/favicon.ico">

	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="c/homepage.css">
   <link rel="stylesheet" type="text/css" href="c/g2.css"> 
     <style>
       /* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
}

/* Modal Content */
 .modal-content {
  background-image:linear-gradient(to bottom, #6600ff 0%, #ff99ff 100%);
  margin: auto;
  padding: 10px;  
  border: 1px solid #888;
  width: 32%;
} 


/* The Close Button */
.close {

  color:brown;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
                                                         

			
			fieldset{
				margin-top:20px;
				width:400px;
                                height:300px;
                               
                                background-image:linear-gradient(to bottom, #ff6699 0%, #33cc33 100%);  
			
				border-width:10px;
			}
			legend{
				font-family:Gabriola;
				font-size:50px;
                            
                             
			}
 .bt2{
                              margin-right: 10px;
     border-radius: 4px;
    padding: 12px 30px;  
   text-decoration: none;
   letter-spacing: 1px;
  text-decoration: none;
  color: #F8F8FF;
 background-image:linear-gradient(to bottom, #660033 0%, #cc3300 100%);  
 }
table {
  border-spacing: 25px;
  font-family: monotype coursiva;
}
.tab{
  color: #4B0082;
  }
 #search {
            border-radius: 50px;
            border: 2px solid black;
        }

        #button {
            
            border: 0px solid black;
            height: 50px;
            border-radius: 30px;
            cursor: pointer;
        }

  </style>

</head>
<body>

<div class="ad">
 <button id="myBtn">Admin</button>  
</div>



<div id="myModal" class="modal">


  <div class="modal-content">
     
    <span class="close">&times;</span>
    <center>
      
   <form  method="post">
    
		<fieldset border-width=200>
		<legend class="f1">Login</legend>
		<table cellpadding=8>
			<tr>
				<td class="tab">Admin Id</td>
				<td><input type=text name="aid"/></td>
			</tr>
			<tr>
				<td class="tab">Password</td>
				<td><input type=password name="password"/></td>
			</tr>
                  <?php
                        if(isset($_POST["aid"]))
                        {
                          $con=new mysqli("localhost","root","","tour");
                          $aid=$_POST["aid"];
                          $password=$_POST["password"];
                          $sql="select *from admin where aid='".$aid."' and password='".$password."'";
                          $result=$con->query($sql);
                           if($result->num_rows==1)
                          {  $row=$result->fetch_assoc();
                             
                             $_SESSION["email"]=$row["u_email"];
                            header("location:admin/profile.php");
                            exit;
                          }
                       }
                  ?>
		</table>
		<br><br>
  	<input class = "bt2" type=submit value="Login" />  
              
		
		 
		</fieldset>
		</form>
                <center>
  </div>

</div>

   

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>  
     
  

      

   
<div id="t">
     <h1 class ="t1">Travel & Tourism </h1>
     </div>

  
      <nav>
           
         <div class="logo">  <img class="logo1" src="P/l4.jfif" >
           <h1 class=l1>Paradise</h1>
           </div>   
     
          <div class="menu">
                 <a href="home_page.php">Home</a>
                
             <div class="dropdown">  
     <a href="package.php" class="menu"> Packages</a>
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
            
          
            
                       <div class="log" id="logg">
             <a href="login_page.php"class="btntwo" >Log in </a>
               </div>
          <div class="log" id="logout" style="display:none">
   <form method="post">
   <input type="submit" value="Logout" class="btntw"  name="logout" style="height:50px;width:60px;">
    </form>
   </div>     
    </nav>  
         <main>
           <section> 
  
                 <h3 class="hd">Your journey starts here!</h3>
                 <h1 class="hd">Dream.Explore.Discover<span> </span></h1>
                    <p class="hd">"Life is an adventure"</p>
                   
            

           <div> 

            <a class="abs" href="#about">Know more</a><br>
                   <a name="about">  
       <form> 
       <select class="form" id="search" name="search" onselect="srch()" >
					<option selected value="select" ></option>
                                        <option value=uttar_pradesh>uttar_pradesh</option>
                                        <option value=madhya_pradesh>madhya_pradesh</option>              
					<option value=himanchal_pradesh>himanchal_pradesh</option>
					<option value=punjab>punjab</option>
                                        <option value=rajasthan>rajasthan</option>
					<option value=gujarat>gujarat</option>
					<option value=karnataka>karnataka</option>
                                        <option value=assam>assam</option>
					<option value=tamil_nadu>tamil_nadu</option>
                                        <option value=kerela>kerela</option>
                                        <option value=arunanchal_pradesh>arunanchal_pradesh</option>
                                        <option value=west_bengal>west_bengal</option>
				</select>
			
 <!--      <input type="search" id="search" name="search" class="form" onchange="srch()" placeholder="Search ">   -->

       <button type="button" id="button" class="form1" onclick="srch()">  <i class="fa fa-search"
                        style="font-size: 18px;"> 
                    </i> </button>
         
    <script>
        function srch() {
            var a = document.getElementById("search").value;
              
            if (a === "uttar_pradesh") {
                window.open("NorthIndia.php#up","_self");
            }
              if (a === "madhya_pradesh") {
                window.open("NorthIndia.php#mp","_self");
            }
            if (a === "himanchal_pradesh") {
                window.open("NorthIndia.php#hp","_self");
            }

            if (a === "punjab") {
                window.open("NorthIndia.php#pun","_self");
            }
             if (a === "rajasthan") {
                window.open("westIndia.php#raj","_self");
            }
             if (a === "gujarat") {
                window.open("westIndia.php#gj","_self");
            }
            if (a === "karnataka") {
                window.open("southIndia.php#kn","_self");
            }
            if (a === "assam") {
                window.open("eastIndia.php#as","_self");
            }
            if (a === "tamil_nadu") {
                window.open("southIndia.php#tn","_self");
            }
             if (a === "kerela") {
                window.open("southIndia.php#kr","_self");
            }
             if (a === "arunanchal_pradesh") {
                window.open("eastIndia.php#ap","_self");
            }
             if (a === "west_bengal") {
                window.open("eastIndia.php#wb","_self");
            }
            


        }
    </script>
   
          </form> 
    
        
       
        </div>
            
           
          </main>   
   
        

                 
                     
          <div class="main2">
               
                    <a name="about"> 
                <h1> About Us.... </h1>
                            <p class="ap">
                                      We offer  various types of  tours and day trips of varying lengths and destinations to explore and discover
                                      the discerning charm, simplicity and authenticity of the amazing regions.
                                      We provide varius types of packages to the users and user can register their details and they can choose
                                       package as per their need. Here we provide vaious types of tours like: <br>
                               <ul class="ap">    <li> Historical   </li>
                                    <li>   Spiritual </li>
                                    <li>   Wildlife </li>
                                     <li>   Holiday trips </li> </ul></p>
                                 <p class="ap">
                                       So user can plan the trips accordingly.<br>
                                      We here also provide the facility of staying in luxurios hotels.
                                      And the hotel manager books cabs accordingly as per the users destination place so that user can 
                                      easily enjoy his/her planned trips with full of enjoyement.
                                      In Tour Packages we offering everything
      from skiing and hiking adventures, and business, Family packages, group travel,
       historical tours, Cab servics, hotel reservation...the possibilities are endless! <br>
         We invite you to visit our links and check out the specials available to book on
        our website. Go to "Tours" and explore Best Tour packages that  Tour
         Packages offers you.

         If you're interested in an active vacation, we are here for exciting hiking and 
          skiing vacations in India.
                             </p><br>
             
 
<div class = "g1">
<a class="abs" href="#images">Gallery</a> 
<br>
<br>
  
    <a name="images">
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
 
    <img src="P/h.png" style="width:100%">
    <div class="text1">Manali, Himachal Pradesh</div>
  </div>
  <div class="mySlides fade">
  
    <img src="P/h1.jpg" style="width:100%">
    <div class="text"> Valley Of Flowers, Uttaranchal </div>
  </div>

  <div class="mySlides fade">
 
    <img src="P/h2.jpg" style="width:100%">
    <div class="text">Stok Kangri, Ladakh </div>
  </div>

  <div class="mySlides fade">

    <img src="P/h3.png" style="width:100%">
    <div class="text"> Taj Mahal, Agra</div>
  </div>
   <div class="mySlides fade">
 
    <img src="P/h4.jpg" style="width:100%">
    <div class="text">Lake Pichola, Udaipur</div>
  </div>
   <div class="mySlides fade">
 
    <img src="P/h5.jpg" style="width:100%">
    <div class="text"> Golden Temple, Amritsar</div>
  </div>
    <div class="mySlides fade">
 
    <img src="P/h6.jpg" style="width:100%">
    <div class="text">Mussoorie, Uttarakhand</div>
  </div>
    <div class="mySlides fade">
 
    <img src="P/h7.jpg" style="width:100%">
    <div class="text">Rishikesh</div>
  </div>
      <div class="mySlides fade">
 
    <img src="P/h8.png" style="width:100%">
    <div class="text1">Kodaikanal, Tamil Nadu</div>
  </div>
   <div class="mySlides fade">
 
    <img src="P/h9.jpg" style="width:100%">
    <div class="text1">Gokarna, Karnataka</div>
  </div>
    <div class="mySlides fade">
 
    <img src="P/h10.jpg" style="width:100%">
    <div class="text1">Goa</div>
  </div>
   <div class="mySlides fade">
 
    <img src="P/h11.jpg" style="width:100%">
    <div class="text">Goa</div>
  </div>


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
 
</div>

<div>
<script type="text/javascript" >
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
 <br><br> 
       
       <div class="st" >
<!--        <a href="21_travel_tourism" id="fa1" class="fa fa-facebook"></a>
<a href="#" id="fa1" class="fa fa-twitter"></a>  -->
   
  
   <?php
    if(isset($_POST["logout"])){
    echo "<script>document.getElementById('logout').style.display='none';</script>";
    echo "<script>document.getElementById('logg').style.display='block';</script>";
      echo "<script>alert('Logout Successfully');</script>";
      
       session_destroy();
      }
     else if(isset($_SESSION["login"])){
      echo "<script>document.getElementById('logout').style.display='block';</script>";
    echo "<script>document.getElementById('logg').style.display='none';</script>";
      
       
      }
     ?>


 
<!--   <a href="#" id="fa1" class="fa fa-google"></a>
  <a href="#" id="fa1" class="fa fa-linkedin"></a>
  <a href="#" id="fa1"  class="fa fa-youtube"></a>  -->
 
     </div>  
          
  </section>
      
      
   
   
 </body>
</html>