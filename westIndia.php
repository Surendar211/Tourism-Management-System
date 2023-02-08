<?php
	session_start();
?>
<html>
	<head>
		<title>Tour | West India</title>
		<link rel="stylesheet" href="c/navbar.css">
		<link rel="stylesheet" href="c/css1.css">
		<link rel="stylesheet" href="c/popup.css">
		<link rel="stylesheet" href="c/menu1.css">
		<style>
			.d1{
				background-image:url("P/pic6.jpg");
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

		<div class=d1>
			<h1>West India</h1>
		</div>
		<div id=dd1>
			<h2>Type of Tours<br>State Wise</h2>
			<details>
				<summary class=s1><a href="#rj">Rajasthan</a></summary>
				<details>
					<summary class=s2><a href="#rjwi">Wildlife</a></summary>
					<p class=p1>
						Ranthambore National Park<br>
						Mount Abu Wildlife Santuary<br>
						Nahargarh Wildlife Sanctuary
					</p>
				</details>
				<details>
					<summary class=s2><a href="#rjhi">Historical</a></summary>
					<p class=p1>
						Jaigarh Fort<br>
						Amber Fort<br>
						Bhangarh Fort
					</p>
				</details>
				<details>
					<summary class=s2><a href="#rjsi">Spritual</a></summary>
					<p class=p1>
						Karni Ma Temple<br>
						Brahma Temple<br>
						Ambika Mata Temple 
					</p>
				</details>
				<details>
					<summary class=s2><a href="#rjdi">District Wise</a></summary>
					<p class=p1>
						Rajasthan Tour<br>
						Jaipur<br>
						Jaisalmer<br>
						Udaipur
					</p>
				</details>
			</details>
			<details>
				<summary class=s1><a href="#gj">Gujarat</a></summary>
				<details>
					<summary class=s2><a href="#gjwi">Wildlife</a></summary>
					<p class=p1>
						Gir National Park<br>
						Shoolpaneshwar Wildlife Sanctuary.<br>
						All Greenery Combine
					</p>
				</details>
				<details>
					<summary class=s2><a href="#gjhi">Historical</a></summary>
					<p class=p1>
						All Forts Together<br>
						Uparkot Fort<br>
						Taranga Fort
					</p>
				</details>
				<details>
					<summary class=s2><a href="#gjsi">Spritual</a></summary>
					<p class=p1>
						All Temples Together<br>
						Shree Somnath Jyotirlinga Temple<br>
						Mahakali Mata Mandir<br>
						Dwarkadhish Temple
					</p>
				</details>
				<details>
					<summary class=s2><a href="#gjdi">District Wise</a></summary>
					<p class=p1>
						Surat<br>
						Ahemdabad<br>	
						Whole Gujarat Tour
					</p>
				</details>
			</details>
							
		</div>
		<hr width=1000 color=black size=3 noshade>
		<form name=f1 action="pay1.php" method=post>
		<div class=st>
			<a name=rj><h1>Rajasthan</h2></a>
			<p class=p2>Rajasthan is home to attractions for domestic and foreign travellers, including the forts and palaces of Jaipur, lakes 
			of Udaipur, Temples of Rajsamand and Pali, sand dunes of Jaisalmer and Bikaner, Havelis of Mandawa 
			and Fatehpur, Rajasthan, wildlife of Sawai Madhopur, the scenic beauty of Mount Abu, tribes of Dungarpur and Banswara, and the 
			cattle fair of Pushkar.</p>
			<h2 align=center>Packages</h2>
			<h3><a name="rjwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d2 class=d2>
						<img src="P\rjwi1.jpg" alt="Ranthambore National Park" class=img1>
						<h1 class=hd2>Ranthambore National Park</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Ranthambore National Park hosts deciduous forests and wildlife such as Bengal tiger, Indian 
						leopard, nilgai, wild boar, sambar, striped hyena, sloth bear, southern plains gray langur, rhesus macaque,
						mugger crocodile and chital</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t3 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t3","t4")><input type=text id=t4 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(2,"t3","t4")>
						<input type=button value="Close" onclick=package1(2,"t3","t4")>
					</div>
					<div class=d3 onclick=package1(2)>
						<img src="P\rjwi1.jpg">
						<p>Ranthambore National Park<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
					<td>
					<div id=d3 class=d2>
						<img src="P\rjwi2.jpg" alt="Mount Abu Wildlife Santuary" class=img1>
						<h1 class=hd2>Mount Abu Wildlife Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Mount Abu Sanctuary is also home to a variety of animals including Indian Leopard, sloth bear, 
						Sambar deer, wild boar and chinkara. </p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t5 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t5","t6")><input type=text id=t6 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(3,"t5","t6")>
						<input type=button value="Close" onclick=package1(3,"t5","t6")>
					</div>
					<div class=d3 onclick=package1(3)>
						<img src="P\rjwi2.jpg">
						<p>Mount Abu Wildlife Santuary<br><br>2days 1 night<br>Price :INR 4500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d4 class=d2>
						<img src="P\rjwi3.jpg" alt="Nahargarh Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Nahargarh Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The Nahargarh Wildlife Sanctuary is home to 285 species of birds, Asiatic lions, Bengal tigers,
				 		sloth bear, hyenas, panthers, deer, crocodiles etc.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t7 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t7","t8")><input type=text id=t8 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(4,"t7","t8")>
						<input type=button value="Close" onclick=package1(4,"t7","t8")>
					</div>
					<div class=d3 onclick=package1(4)>
						<img src="P\rjwi3.jpg">
						<p>Nahargarh Wildlife Sanctuary<br>2days 1 night<br>Price :3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="rjhi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d5 class=d2>
						<img src="P\rjhi1.jpg" alt="Jaigarh Fort" class=img1>
						<h1 class=hd2>Jaigarh Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The fort houses the world's largest cannon on wheels, a majestic palace complex 
						and the assembly hall of the warriors known as 'Shubhat Niwas' along with a museum and an armory.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t9 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t9","t10")><input type=text id=t10 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(5,"t9","t10")>
						<input type=button value="Close" onclick=package1(5,"t9","t10")>
					</div>
					<div class=d3 onclick=package1(5)>
						<img src="P\rjhi1.jpg">
						<p>Jaigarh Fort<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
					<td>
					<div id=d6 class=d2>
						<img src="P\rjhi2.jpg" alt="Amber Fort" class=img1>
						<h1 class=hd2>Amber Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The main attraction is Elephant ride.A popular way of reaching the top of 
						Amber Fort is to ride on an elephant.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t11 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t11","t12")><input type=text id=t12 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(6,"t11","t12")>
						<input type=button value="Close" onclick=package1(6,"t11","t12")>
					</div>
					<div class=d3 onclick=package1(6)>
						<img src="P\rjhi2.jpg">
						<p>Amber Fort<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d7 class=d2>
						<img src="P\rjhi3.jpg" alt="Bhangarh Fort" class=img1>
						<h1 class=hd2>Bhangarh Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Technically, Bhangarh Fort is actually a small city with temples, palaces, and multiple gates.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t13 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t13","t14")><input type=text id=t14 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(7,"t13","t14")>
						<input type=button value="Close" onclick=package1(7,"t13","t14")>
					</div>
					<div class=d3 onclick=package1(7)>
						<img src="P\rjhi3.jpg">
						<p>Bhangarh Fort<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="rjsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d8 class=d2>
						<img src="P\rjsi1.jpg" alt="Karni Ma Temple" class=img1>
						<h1 class=hd2>Karni Ma Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> The temple draws visitors from across the country for blessings, as well as curious tourists from around the world.</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t15 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t15","t16")><input type=text id=t16 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(8,"t15","t16")>
						<input type=button value="Close" onclick=package1(8,"t15","t16")>
					</div>
					<div class=d3 onclick=package1(8)>
						<img src="P\rjsi1.jpg">
						<p>Karni Ma Temple<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
					<td>
					<div id=d9 class=d2>
						<img src="P\rjsi2.jpg" alt="Brahma Temple" class=img1>
						<h1 class=hd2>Brahma Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The temple is one of very few existing temples dedicated to the Hindu creator-god Brahma in India 
						and remains the most prominent among them</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t17 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t17","t18")><input type=text id=t18 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(9,"t17","t18")>
						<input type=button value="Close" onclick=package1(9,"t17","t18")>
					</div>
					<div class=d3 onclick=package1(9)>
						<img src="P\rjsi2.jpg">
						<p>Brahma Temple<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d10 class=d2>
						<img src="P\rjsi3.jpg" alt="Ambika Mata Temple" class=img1>
						<h1 class=hd2>Ambika Mata Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The temple is dedicated to Ambika Mata who is a divine version of goddess Durga.</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t19 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t19","t20")><input type=text id=t20 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(10,"t19","t20")>
						<input type=button value="Close" onclick=package1(10,"t19","t20")>
					</div>
					<div class=d3 onclick=package1(10)>
						<img src="P\rjsi3.jpg">
						<p>Ambika Mata Temple<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="rjdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d11 class=d2>
						<img src="P\rjdi.jpg" alt="Rajasthan Tour" class=img1>
						<h1 class=hd2>Rajasthan Tour</h1>
						<h4 class=hd2>8days 7 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We visit all the places in Rajasthan</p>
						<div class=dd>
							<p>Price : INR 8000per person</p>
							<input type=text id=t21 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(8000,"t21","t22")><input type=text id=t22 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(11,"t21","t22")>
						<input type=button value="Close" onclick=package1(11,"t21","t22")>
					</div>
					<div class=d3 onclick=package1(11)>
						<img src="P\rjdi.jpg">
						<p>Rajasthan Tour<br>8days 7 night<br>Price :INR 8000per person</p>
					</div>
					</td>
					<td>
					<div id=d12 class=d2>
						<img src="P\rjdi2.jpg" alt="Jaipur" class=img1>
						<h1 class=hd2>Jaipur</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : City Palace , Jantar Mantar , Hawa Mahal , Amber Fort , Albert Hall Museum , Nahargarh Fort , 
						Galta Ji</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t23 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t23","t24")><input type=text id=t24 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(12,"t23","t24")>
						<input type=button value="Close" onclick=package1(12,"t23","t24")>
					</div>
					<div class=d3 onclick=package1(12)>
						<img src="P\rjdi2.jpg">
						<p>Jaipur<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d13 class=d2>
						<img src="P\rjdi3.jpg" alt="Jaisalmer" class=img1>
						<h1 class=hd2>Jaisalmer</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Jaisalmer Fort , Gadsisar Lake , Patwon Ki Haveli , Bada Bagh , Tanot Mata Temple , Jaisalmer War Museum
						, Desert National park , Nathmal-ki-Haveli , Jain Temple</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t25 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t25","t26")><input type=text id=t26 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(13,"t25","t26")>
						<input type=button value="Close" onclick=package1(13,"t25","t26")>
					</div>
					<div class=d3 onclick=package1(13)>
						<img src="P\rjdi3.jpg">
						<p>Jaisalmer<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
					<td>
					<div id=d14 class=d2>
						<img src="P\rjdi4.jpg" alt="Udaipur" class=img1>
						<h1 class=hd2>Udaipur</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : The Lake Palace , City Palace , Lake Pichola , Jagdish Temple , Bagore Ki Haveli , Gulab Bagh and Zoo ,
						Jagmandir , Maharana Pratap Memorial</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t27 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t27","t28")><input type=text id=t28 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(14,"t27","t28")>
						<input type=button value="Close" onclick=package1(14,"t27","t28")>
					</div>
					<div class=d3 onclick=package1(14)>
						<img src="P\rjdi4.jpg">
						<p>Udaipur<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr color=black size=3 noshade>
			<br><br>
			<a name=gj><h1>Gujarat</h2></a>
			<p class=p2>Gujarat's natural environment includes the Great Rann of Kutch and the hills of Saputara, and it is the sole home 
			of pure Asiatic lions in the world.During the historic reigns of the sultans, Hindu craftsmanship 
			blended with Islamic architecture, giving rise to the Indo-Saracenic style. Many structures in the state are built in this fashion.</p>
			<h2>Packages</h2>
			<h3><a name="gjwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d15 class=d2>
						<img src="P\gjwi1.jpg" alt="Gir National Park" class=img1>
						<h1 class=hd2>Gir National Park</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> Gir National Park is an esteemed wildlife destination in India which has attained an 
						immense popularity among vivid travelers, wildlife lovers, photographers, nature enthusiasts, researchers and hunters.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t29 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t29","t30")><input type=text id=t30 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(15,"t29","t30")>
						<input type=button value="Close" onclick=package1(15,"t29","t30")>
					</div>
					<div class=d3 onclick=package1(15)>
						<img src="P\gjwi1.jpg">
						<p>Gir National Park<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
					<td>
					<div id=d16 class=d2>
						<img src="P\gjwi2.jpg" alt="Shoolpaneshwar Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Shoolpaneshwar Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Shoolpaneshwar Wild Life SanctuaryThe forest area rated as one of the best and thickest in the 
						state, is spread over an area, which includes a major watershed feeding two major reservoirs with the Rajpipla hills as backdrop</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t31 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t31","t32")><input type=text id=t32 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(16,"t31","t32")>
						<input type=button value="Close" onclick=package1(16,"t31","t32")>
					</div>
					<div class=d3 onclick=package1(16)>
						<img src="P\gjwi2.jpg">
						<p>Shoolpaneshwar Wildlife Sanctuary<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="gjhi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d17 class=d2>
						<img src="P\gjhi1.jpg" alt="All Forts Together" class=img1>
						<h1 class=hd2>All Forts Together</h1>
						<h4 class=hd2>5days 4 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Forts we visit : Roha Fort , Kanthkot Fort , Uparkot Fort , Pavagadh Champaner Fort , Surat Fort, Songadh Fort , 
						Dabhoi Fort</p>
						<div class=dd>
							<p>Price : INR 6000per person</p>
							<input type=text id=t33 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(6000,"t33","t34")><input type=text id=t34 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(17,"t33","t34")>
						<input type=button value="Close" onclick=package1(17,"t33","t34")>
					</div>
					<div class=d3 onclick=package1(17)>
						<img src="P\gjhi1.jpg">
						<p>All Forts Together<br>5days 4 night<br>Price :INR 6000per person</p>
					</div>
					</td>
					<td>
					<div id=d18 class=d2>
						<img src="P\gjhi2.jpg" alt="Uparkot Fort" class=img1>
						<h1 class=hd2>Uparkot Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>There are major sites in Uparkot Fort namely Buddhist Caves, Adi-Kadi Vav etc.</p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t35 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t35","t36")><input type=text id=t36 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(18,"t35","t36")>
						<input type=button value="Close" onclick=package1(18,"t35","t36")>
					</div>
					<div class=d3 onclick=package1(18)>
						<img src="P\gjhi2.jpg">
						<p>Uparkot Fort<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d19 class=d2>
						<img src="P\gjhi3.jpg" alt="Taranga Fort" class=img1>
						<h1 class=hd2>Taranga Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> The place is primarily known for being a major Jain pilgrimage centre, even though it is also deeply associated with
	 					Buddhism</p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t37 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t37","t38")><input type=text id=t38 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(19,"t37","t38")>
						<input type=button value="Close" onclick=package1(19,"t37","t38")>
					</div>
					<div class=d3 onclick=package1(19)>
						<img src="P\gjhi3.jpg">
						<p>Taranga Fort<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="gjsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d20 class=d2>
						<img src="P\gjsi1.jpg" alt="All temples Together" class=img1>
						<h1 class=hd2>All temples Together</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Somnath Temple , Dwarkadhish Temple , Swaminarayan Akshardham Temple ,  Rukmini Temple , Sun Temple , Shri Shatrunjaya Temples
						, Jagannath Temple ,  Hutheesing Jain Temple , Sandipani Temple</p>
						<div class=dd>
							<p>Price : INR 6500per person</p>
							<input type=text id=t39 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(6500,"t39","t40")><input type=text id=t40 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(20,"t39","t40")>
						<input type=button value="Close" onclick=package1(20,"t39","t40")>
					</div>
					<div class=d3 onclick=package1(20)>
						<img src="P\gjsi1.jpg">
						<p>All temples Together<br>6days 5 night<br>Price :INR 6500per person</p>
					</div>
					</td>
					<td>
					<div id=d21 class=d2>
						<img src="P\gjsi2.jpg" alt="Shree Somnath Jyotirlinga Temple" class=img1>
						<h1 class=hd2>Shree Somnath Jyotirlinga Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Shree Somnath is first among the twelve Aadi Jyotirlings of India.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t41 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t41","t42")><input type=text id=t42 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(21,"t41","t42")>
						<input type=button value="Close" onclick=package1(21,"t41","t42")>
					</div>
					<div class=d3 onclick=package1(21)>
						<img src="P\gjsi2.jpg">
						<p>Shree Somnath Jyotirlinga Temple<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d22 class=d2>
						<img src="P\gjsi3.jpg" alt="Mahakali Mata Mandir" class=img1>
						<h1 class=hd2>Mahakali Mata Mandir</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The temple has three images of goddesses: the central image is of Kalika Mata, flanked by Kali on the right and 
						Bahucharamata on the left.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t43 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t43","t44")><input type=text id=t44 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(22,"t43","t44")>
						<input type=button value="Close" onclick=package1(22,"t43","t44")>
					</div>
					<div class=d3 onclick=package1(22)>
						<img src="P\gjsi3.jpg">
						<p>Mahakali Mata Mandir<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d23 class=d2>
						<img src="P\gjsi4.jpg" alt="Dwarkadhish Temple" class=img1>
						<h1 class=hd2>Dwarkadhish Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>A Hindu temple dedicated to the god Krishna, who is worshiped here by the name Dwarkadhish, or 'King of Dwarka'. </p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t45 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t45","t46")><input type=text id=t46 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(23,"t45","t46")>
						<input type=button value="Close" onclick=package1(23,"t45","t46")>
					</div>
					<div class=d3 onclick=package1(23)>
						<img src="P\gjsi4.jpg">
						<p>Dwarkadhish Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="gjdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d24 class=d2>
						<img src="P\gjdi1.jpg" alt="Surat" class=img1>
						<h1 class=hd2>Surat</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Sardar Patel Museum , Sarthana Nature Park , Swaminarayan Temple , Science Centre , Jagdishchandra Bose Aquarium
						, Snow Park ,  Ambaji Temple</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t47 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t47","t48")><input type=text id=t48 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(24,"t47","t48")>
						<input type=button value="Close" onclick=package1(24,"t47","t48")>
					</div>
					<div class=d3 onclick=package1(24)>
						<img src="P\gjdi1.jpg">
						<p>Surat<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
					<td>
					<div id=d25 class=d2>
						<img src="P\gjdi2.jpg" alt="Ahmedabad" class=img1>
						<h1 class=hd2>Ahmedabad</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Sabarmati Ashram , Swaminarayan Temple , Dada Hari Wav , Nagina Wadi , Bhadra Fort , Sarkhej Roza
						, Kankaria Lake</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t49 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t49","t50")><input type=text id=t50 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(25,"t49","t50")>
						<input type=button value="Close" onclick=package1(25,"t49","t50")>
					</div>
					<div class=d3 onclick=package1(25)>
						<img src="P\gjdi2.jpg">
						<p>Ahmedabad<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d26 class=d2>
						<img src="P\gjdi3.jpg" alt="Whole Gujarat Tour" class=img1>
						<h1 class=hd2>Whole Gujarat Tour</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We visit all the beautiful places of Gujarat</p>
						<div class=dd>
							<p>Price : INR 7500per person</p>
							<input type=text id=t51 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(7500,"t51","t52")><input type=text id=t52 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(26,"t51","t52")>
						<input type=button value="Close" onclick=package1(26,"t51","t52")>
					</div>
					<div class=d3 onclick=package1(26)>
						<img src="P\gjdi3.jpg">
						<p>Whole Gujarat Tour<br>6days 5 night<br>Price :INR 7500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr color=black size=3 noshade>
			<input type=hidden id=hid1 name=hid1>
			<input type=hidden id=nt name=nt>
			<input type=hidden id=tp name=tp>
		</div>
		</form>
		<footer>
			<h2>States To See Other Tours</h2><br>
			<a href="NorthIndia.php#up">Uttar Pradesh</a><br>
			<a href="NorthIndia.php#mp">Madhya Pradesh</a><br>
			<a href="NorthIndia.php#hp">Himanchal Pradesh</a><br>
			<a href="NorthIndia.php#pun">Punjab</a><br>
			<a href="#rj">Rajasthan</a><br>
			<a href="#gj">Gujarat</a><br>
			<a href="southIndia.php#kn">Karnataka</a><br>
			<a href="eastIndia.php#as">Assam</a><br>
			<a href="southIndia.php#tn">Tamil Nadu</a><br>
			<a href="southIndia.php#kr">Kerala</a><br>
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
				else if(document.getElementById(i1).value>=0)
					document.getElementById(i2).value=document.getElementById(i1).value*x1;
				else
				{
					alert("Input Not Valid");
					return;
				}	
			}
			function hid(x,i1,i2){
				var nt=document.getElementById(i1).value;
				var tp=document.getElementById(i2).value;
				if((nt!="")&&(tp!="")){
				document.getElementById("nt").value=nt;
				document.getElementById("tp").value=tp;
				var val=x+212-1;
				document.getElementById("hid1").value=val;
				document.f1.submit();
				}
				else
					alert("Please enter Number of Travelers and calculate the price");
			}
		</script>	
	</body>
</html>
	