<?php
	session_start();
?>
<html>
	<head>
		<title>Packages</title>
		<link rel="stylesheet" href="c/navbar.css">
		<link rel="stylesheet" href="c/popup.css">
		<link rel="stylesheet" href="c/menu1.css">
		<style>
			*{
				z-index:-1;
				font-family:garamond;
			}
			
			#d{
				color:white;
				text-shadow:3px 3px 3px blue;
				font-size:5vw;
				letter-spacing:10px;
				background-image:url(P/kpic2.jpg);
				height:80%;
				width:100%;
				background-size:cover;
				background-position:bottom right;
				
			}
			#d>h1{
				margin-left:50px;
			}
			#d1{
				
				margin:100px 250px;
			}
			figure:hover{
				cursor:pointer;
				border:5px inset green;
				text-decoration:underline;
			}
			.f1{
				display:inline-block;
				border:0.8vw outset lightgray;
				
			}
			.f1 figcaption{
				cursor:pointer;
				font-size:2vw;
				font-weight:bold;
				text-align:center;
				
			}
			.f1>img{
				
				height:20vw;
				width:20vw;
				border-radius:7vw;
			}
			
			.hd1{
				font-size:40px;
				text-align:center;
				font-weight:bold;
				text-shadow:6px 6px 6px red;
			}
			.p2{
				font:30px bold;
				text-align:center;
			}
			table{
				margin-left:22vw;
			}	
			table tr td figure{
				border: outset;
				text-align:center;
				font-weight:bold;
				height:15vw;
			}
			table tr td figure>img{
				border-radius:2vw;
				height:10vw;
			}
			
 			

		</style>
			
	</head>
	<body>
		<nav>
			<div class=menu>
				<ul class=u>
				<li class=ul1><a href="home_page.php" class=c1>Home</a></li>
  				<li class="dropdown1 ul1"><a href="package.php" class="menu c1"> Packages</a>
 					<ul class="dropdown-content">
      						<li><a href="NorthIndia.php">North India</a> 
					                <li><a href="eastIndia.php">East India</a>
      						<li><a href="southIndia.php">South India</a> 
      						<li><a href="westIndia.php">West India</a>
 					 </ul>
				  </li>
				  <li class=ul1><a href="contact_us.php" class=c1>Contact</a></li>
                                  <li class=ul1><a href="feedback.php" class=c1>Feedback</a></li>
				</ul>
			</div>
		</nav> 
		<div id=d>
			<h1>Tour Packages</h1>
		</div>
		<div id=d1>
		<a href="NorthIndia.php">
		<figure class=f1>
			<img src=P/pic4.jpg alt="North India">
			<figcaption>North India <br> View Packages </figcaption>
		</figure>
		</a>
		<a href="southIndia.php">
		<figure class=f1>
			<img src=P/kpic2.jpg alt="South India">
			<figcaption>South India <br> View Packages </figcaption>
		</figure>
		</a>
		<a href="eastIndia.php">
		<figure class=f1>
			<img src=P/apic1.jpg alt="East India">
			<figcaption>East India <br> View Packages </figcaption>
		</figure>
		</a>
		<a href="westIndia.php">
		<figure class=f1>
			<img src=P/rpic8.jpg alt="West India">
			<figcaption>West India <br> View Packages </figcaption>
		</figure>
		</a>
		</div>
		<form name=f1 action="pay1.php" method=post>
		<hr width=800 color=black size=3 noshade>
		<h1 class=hd1>Incredible India</h1>
		<p class=p2>India a country of cultural, topography, and wildlife diversity.There are several architectural masterpieces, making it an 
		ideal travel destination to plan a heritage tour in the world.</p>
		
		<table>
		<tr>
		<td>
		<div id=d2 class=d2>
			<img src=P/pro_vana.jpg class=img1>
			<h1 class=hd2>Munshi Ghat</h1>
			<h4 class=hd2>2 days 1 night</h4>
			<h4 class=hd2>Stay In : Palace Guest House</h4>
			<br>
			
			<p class=para>Munshi Ghat – also known as Darbhanga Ghat – is one of the more photogenic ghats along the old town stretch of the 
			Ganges in Varanasi.</p>
			<div class=dd>
				<p>Price : INR 3500 per person</p>
				<input type=text id=t1 placeholder="No. of Travelers"/><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t1","t2")><input type=text id=t2 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(2,"t1","t2")>
			<input type=button value="Close" onclick=package1(2,"t1","t2")>
		</div>
		<figure onclick=package1(2)>
			<img src=P/pro_vana.jpg alt=vanarasi>
			<figcaption >Munshi Ghat in Varanasi<br>View Package</figcaption>
		</figure>
		
		
		</td>
		<td>
		<div id=d3 class=d2>
			<img src=P/pro_lad.jpg alt=Ladakh class=img1>
			<h1 class=hd2>Tso Moriri</h1>
			<h4 class=hd2>3 days 2 night</h4>
			<h4 class=hd2>Stay In : Paradise House</h4>
			<br>
			
			<p class=para>Tso Moriri lake in Changthang region of Ladakh is one of the most beautiful, calm and sacred (for ladakhis) high altitude 
			lakes in India.</p>
			<div class=dd>
				<p>Price : INR 4000 per person</p>
				<input type=text id=t3 placeholder="No. of Travelers"/><br><br> 
				<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t3","t4")><input type=text id=t4 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(3,"t3","t4")>
			<input type=button value="Close" onclick=package1(3,"t3","t4")>
		</div>
		<figure onclick=package1(3)>
			<img src=P/pro_lad.jpg alt=Ladakh>
			<figcaption>Tso Moriri in Ladakh<br>View Package</figcaption>
		</figure>
		</td>
		</tr>
		<tr>
		<td>
		<div id=d4 class=d2>
			<img src=P/pro_gol.jpg alt=Amritsar class=img1>
			<h1 class=hd2>Golden Temple, Amritsar</h1>
			<h4 class=hd2>1 day 1 night</h4>
			<h4 class=hd2>Stay In : Gurudev Hotel</h4>
			<br>
			<p class=para>Amritsar is world-famous for the beautiful and highly revered Golden Temple or Sri Harmandir Sahib, 
			which is one of the most prominent spiritual sites in the country..</p>
			<div class=dd>
				<p>Price : INR 2000 per person</p>
				<input type=text id=t5 placeholder="No. of Travelers"/><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t5","t6")><input type=text id=t6 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(4,"t5","t6")>
			<input type=button value="Close" onclick=package1(4,"t5","t6")>
		</div>
		<figure onclick=package1(4)>
			<img src=P/pro_gol.jpg alt=Amritsar>
			<figcaption>Golden Temple, Amritsar<br>View Package</figcaption>
		</figure>
		</td>
		<td>
		<div id=d5 class=d2>
			<img src=P/pro_ele.jpg alt=maharastra class=img1>
			<h1 class=hd2>Elephanta Caves</h1>
			<h4 class=hd2>1day 1 night</h4>
			<h4 class=hd2>Stay In : DreamLand Hotel</h4>
			<br>
			
			<p class=para>The Elephanta Caves serve as a great tourist attraction in the vicinity of the large Mumbai metropolis.</p>
			<div class=dd>
				<p>Price : INR 3000 per person</p>
				<input type=text id=t7 placeholder="No. of Travelers" /><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t7","t8")><input type=text id=t8 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(5,"t7","t8")>
			<input type=button value="Close" onclick=package1(5,"t7","t8")>
		</div>
		<figure onclick=package1(5)>
			<img src=P/pro_ele.jpg alt=maharastra>
			<figcaption>Elephanta Caves<br>View Package</figcaption>
		</figure>
		</td>
		</tr>
		<tr>
		<td>
		<div id=d6 class=d2>
			<img src=P/pro_mys.jpg alt=mysore class=img1>
			<h1 class=hd2>Mysore Palace</h1>
			<h4 class=hd2>2 days 1 night</h4>
			<h4 class=hd2>Stay In : Mysore Guest House</h4>
			<br>
			
			<p class=para>Mysore Palace also known as Amba Vilas Palace located at the heart of Mysore city is the most 
			prominent tourist destination of Mysore that attracts millions of visitors round the year. </p>
			<div class=dd>
				<p>Price : INR 3500 per person</p>
				<input type=text id=t9 placeholder="No. of Travelers" /><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t9","t10")><input type=text id=t10 placeholder="Total Price">
			</div>
			<input type=button value="Book Now"  onclick=hid(6,"t9","t10")>
			<input type=button value="Close" onclick=package1(6,"t9","t10")>
		</div>
		<figure onclick=package1(6)>
			<img src=P/pro_mys.jpg alt=mysore>
			<figcaption>Mysore Palace illuminated at night<br>View Package</figcaption>
		</figure>
		</td>
		<td>
		<div id=d7 class=d2>
			<img src=P/pro_bri.jpg alt=Tamil Nadu class=img1>
			<h1 class=hd2>Brihadeeswarar Temple</h1>
			<h4 class=hd2>1 day 1 night</h4>
			<h4 class=hd2>Stay In : Shiva Hotel</h4>
			<br>
			
			<p class=para>Brihadishwara temple, is a Hindu temple dedicated to Shiva located in South bank of Kaveri river in Thanjavur, 
			Tamil Nadu, India.</p>
			<div class=dd>
				<p>Price : INR 2000 per person</p>
				<input type=text id=t11 placeholder="No. of Travelers"/><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t11","t12")><input type=text id=t12 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(7,"t11","t12")>
			<input type=button value="Close" onclick=package1(7,"t11","t12")>
		</div>
		<figure onclick=package1(7)>
			<img src=P/pro_bri.jpg alt=Tamil Nadu>
			<figcaption>Brihadeeswarar Temple at Thanjavur<br>View Package</figcaption>
		</figure>
		</td>
		</tr>
		<tr>
		<td>
		<div id=d8 class=d2>
			<img src=P/pro_kha.jpg alt=Madhya Pradesh class=img1>
			<h1 class=hd2>Khajuraho temples</h1>
			<h4 class=hd2>2 days 1 night</h4>
			<h4 class=hd2>Stay In : Hotel Caves</h4>
			<br>
			
			<p class=para>The Khajuraho is a city of Group of Monuments is a group of 
			Hindu temples and Jain temples in Chhatarpur district, Madhya Pradesh, India.</p>
			<div class=dd>
				<p>Price : INR 3000 per person</p>
				<input type=text id=t13 placeholder="No. of Travelers" /><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t13","t14")><input type=text id=t14 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(8,"t13","t14")>
			<input type=button value="Close" onclick=package1(8,"t13","t14")>
		</div>
		<figure onclick=package1(8)>
			<img src=P/pro_kha.jpg alt=Madhya Pradesh>
			<figcaption>Khajuraho temples<br>View Package</figcaption>
		</figure>
		</td>
		<td>
		<div id=d9 class=d2>
			<img src=P/pro_kai.jpg alt=Maharastra class=img1>
			<h1 class=hd2>Kailasa Temple at Ellora</h1>
			<h4 class=hd2>1 day 1 night</h4>
			<h4 class=hd2>Stay In : Guara Guest House</h4>
			<br>
			
			<p class=para>The Kailasha or Kailashanatha temple is the largest of the rock-cut Hindu temples at the Ellora Caves, Maharashtra, India.</p>
			<div class=dd>
				<p>Price : INR 2000 per person</p>
				<input type=text id=t15 placeholder="No. of Travelers" /><br><br>
				<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t15","t16")><input type=text id=t16 placeholder="Total Price">
			</div>
			<input type=button value="Book Now" onclick=hid(9,"t15","t16")>
			<input type=button value="Close" onclick=package1(9,"t15","t16")>
		</div>
		<figure onclick=package1(9)>
			<img src=P/pro_kai.jpg alt=Maharastra>
			<figcaption>Kailasa Temple at Ellora<br>View Package</figcaption>
		</figure>
		</td>
		</tr>
		</table>
		<input type=hidden id=hid1 name=hid1>
		<input type=hidden id=nt name=nt>
		<input type=hidden id=tp name=tp >
		</form>
		
		<footer>
			<h2>States To See Other Tours</h2><br>
			<a href="NorthIndia.php#up">Uttar Pradesh</a><br>
			<a href="NorthIndia.php#mp">Madhya Pradesh</a><br>
			<a href="NorthIndia.php#hp">Himanchal Pradesh</a><br>
			<a href="NorthIndia.php#pun">Punjab</a><br>
			<a href="westIndia.php#rj">Rajasthan</a><br>
			<a href="westIndia.php#gj">Gujarat</a><br>
			<a href="southIndia.php#kn">Karnataka</a><br>
			<a href="eastIndia.php#as">Assam</a><br>
			<a href="southIndia.php#tn">Tamil Nadu</a><br>
			<a href="southIndia.php#kr">Kerela</a><br>
			<a href="eastIndia.php#ap">Arunanchal Pradesh</a><br>
			<a href="eastIndia.php#wb">West Bengal</a><br>
		</footer>
		<script language="javascript" src="js/popup.js"></script>
		<script language="javascript">
			
			function Cal(x1,i1,i2){
				if(document.getElementById(i1).value=="")
				{
					alert("please enter no. of travelers");
					return;
				}
				else if(document.getElementById(i1).value<0)
				{
					alert("Input Not Valid");
					return;
				}
				else if(document.getElementById(i1).value>0)
					document.getElementById(i2).value=document.getElementById(i1).value*x1;
				else
				{
					alert("Input Not Valid");
					return;
				}	
			}
			function dropdown1(){
				if(document.getElementById("d12").style.display==="none")
				document.getElementById("d12").style.display="block";
				else
				document.getElementById("d12").style.display="none";
			}
			function hid(x,i1,i2){
				var val=0,nt=0,tp=0;
				var nt=document.getElementById(i1).value;
				var tp=document.getElementById(i2).value;
				if((nt!="")&&(tp!="")){
				document.getElementById("nt").value=nt;
				document.getElementById("tp").value=tp;
				var val=x+100-1;
				document.getElementById("hid1").value=val;
				document.f1.action="pay1.php";
				document.f1.method="post";
				document.f1.submit();
				}
				else
					alert("Please enter Number of Travelers and calculate the price");
			}
		</script>
	</body>
</html>
		
	







		