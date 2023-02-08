<?php
	session_start();
?>
<html>
	<head>
		<title>Tour | South India</title>
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
			<h1>South India</h1>
		</div>
		<div id=dd1>
			<h2>Type of Tours<br>State Wise</h2>
			<details>
				<summary class=s1><a href="#kn">Karnataka</a></summary>
				<details>
					<summary class=s2><a href="#knwi">Wildlife</a></summary>
					<p class=p1>
						Bandipur National Park<br>
						Dandeli Wildlife<br>
						Bhadra Wildlife
					</p>
				</details>
				<details>
					<summary class=s2><a href="#knhi">Historical</a></summary>
					<p class=p1>
						Chitradurg Fort<br>
						Mysore Palace<br>
						Bangalore Fort
					</p>
				</details>
				<details>
					<summary class=s2><a href="#knsi">Spritual</a></summary>
					<p class=p1>
						LakshmiDevi Temple<br>
						Brahmeshvara Temple<br>
						Lakshmi Narayan Temple
					</p>
				</details>
				<details>
					<summary class=s2><a href="#kndi">Spritual</a></summary>
					<p class=p1>
						Karnataka Tour<br>
						Bangalore<br>
						Chikmagalur<br>
						Mysore
					</p>
				</details>
			</details>
			<details>
				<summary class=s1><a href="#kr">Kerala</a></summary>
				<details>
					<summary class=s2><a href="#krwi">Wildlife</a></summary>
					<p class=p1>
						Periyar Wildlife Santuary<br>
						Neyyar Wildlife Santuary<br>
						All Greenery Combine
					</p>
				</details>
				<details>
					<summary class=s2><a href="#krhi">Historical</a></summary>
					<p class=p1>
						All Forts Together<br>
						Bekal<br>
						Palakkad Fort<br>
						Fort Emmanuel
					</p>
				</details>
				<details>
					<summary class=s2><a href="#krsi">Spritual</a></summary>
					<p class=p1>
						All Temples Together<br>
						Sabrimala Lord Ayyappa Temple<br>
						Guruvayoor<br>
						Sri Padmanabhaswamy Temple
					</p>
				</details>
				<details>
					<summary class=s2><a href="#krdi">District Wise</a></summary>
					<p class=p1>
						Munnar<br>
						Kochi<br>	
						Whole Kerala Tour
					</p>
				</details>
			</details>
			<details>
				<summary class=s1><a href="#tn">Tamil Nadu</a></summary>
				<details>
					<summary class=s2><a href="#tnwi">Wildlife</a></summary>
					<p class=p1>
						Mudumalai Santuary<br>
						Vallanadu Santuary<br>
						Viralimalai Santuary
					</p>
				</details>
				<details>
					<summary class=s2><a href="#tnsi">Spritual</a></summary>
					<p class=p1>
						Murugan Temple<br>
						Meenakshi Temple<br>
						Rameshwaram Temple
					</p>
				</details>
				<details>
					<summary class=s2><a href="#tndi">District Wise</a></summary>
					<p class=p1>
						Madurai<br>
						Kanyakumari<br>
						Chennai<br>
						Tamil Nadu-A Golden Tour
					</p>
				</details>
			</details>				
		</div>
		<hr width=1000 color=black size=3 noshade>
		<div class=st>
		<form name=f1 action="pay1.php" method=post>
			<a name=kn><h1>Karnataka</h2></a>
			<p class=p2>By virtue of its varied geography and long history, Karnataka hosts numerous spots of interest for tourists. There is an array of ancient sculptured temples, modern 
			cities, scenic hill ranges, forests and beaches. Karnataka has been ranked as the fourth most popular destination for tourism among 
			the states of India.</p>
			<h2 align=center>Packages</h2>
			<h3><a name="knwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d2 class=d2>
						<img src="P\knwi1.jpg" alt="Bandipur National Park" class=img1>
						<h1 class=hd2>Bandipur National Park</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>National park located in the Indian state of Karnataka, which is the state with the second highest 
						tiger population in India.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t3 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t3","t4")><input type=text id=t4 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(2,"t3","t4")>
						<input type=button value="Close" onclick=package1(2,"t3","t4")>
					</div>
					<div class=d3 onclick=package1(2)>
						<img src="P\knwi1.jpg">
						<p>Bandipur National Park<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d3 class=d2>
						<img src="P\knwi2.jpg" alt="Dandeli Wildlife" class=img1>
						<h1 class=hd2>Dandeli Wildlife</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Dandeli Wildlife Sanctuary is a birdwatchers paradise, housing nearly 200 species of birds,
						 most famous for the great hornbill (great Indian hornbill or great pied hornbill) and the Malabar pied hornbill.</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t5 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t5","t6")><input type=text id=t6 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(3,"t5","t6")>
						<input type=button value="Close" onclick=package1(3,"t5","t6")>
					</div>
					<div class=d3 onclick=package1(3)>
						<img src="P\knwi2.jpg">
						<p>Dandeli Wildlife<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d4 class=d2>
						<img src="P\knwi3.jpg" alt="Bhadra Wildlife" class=img1>
						<h1 class=hd2>Bhadra Wildlife</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>sanctuary include elephant, Indian Leopard, gaur, sloth bear, wild boar, black leopard, 
						jungle cat, jackal, wild dog, sambar, spotted deer, barking deer, mouse deer, common langur,etc.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t7 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t7","t8")><input type=text id=t8 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(4,"t7","t8")>
						<input type=button value="Close" onclick=package1(4,"t7","t8")>
					</div>
					<div class=d3 onclick=package1(4)>
						<img src="P\knwi3.jpg">
						<p>Bhadra Wildlife<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="knhi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d5 class=d2>
						<img src="P\knhi1.jpg" alt="Chitradurg Fort" class=img1>
						<h1 class=hd2>Chitradurg Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Chitradurga Fort was known as Chitaldoorg during the British era. It is a massive fortification that  
						stretches over several hills overlooking a flat valley in the district of Chitradurga in Karnataka, India</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t9 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t9","t10")><input type=text id=t10 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(5,"t9","t10")>
						<input type=button value="Close" onclick=package1(5,"t9","t10")>
					</div>
					<div class=d3 onclick=package1(5)>
						<img src="P\knhi1.jpg">
						<p>Chitradurg Fort<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d6 class=d2>
						<img src="P\knhi2.jpg" alt="Mysore Palace" class=img1>
						<h1 class=hd2>Mysore Palace</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Mysore Palace is now one of the most famous tourist attractions in India, after the Taj Mahal, with 
						more than 6 million annual visitors.</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t11 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t11","t12")><input type=text id=t12 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(6,"t11","t12")>
						<input type=button value="Close" onclick=package1(6,"t11","t12")>
					</div>
					<div class=d3 onclick=package1(6)>
						<img src="P\knhi2.jpg">
						<p>Mysore Palace<br>2days 1 night<br>Price :INR 4500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="knsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d7 class=d2>
						<img src="P\knsi1.jpg" alt="LakshmiDevi Temple" class=img1>
						<h1 class=hd2>LakshmiDevi Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>There is a large pond adjacent to the Lakshmi Devi temple. There are granite steps leading to this 
						beautiful temple. The main shrine of Lakshmi Devi is situated inside the compound. There are smaller shrines which 
						surround the main deity.</p>
						<div class=dd>
							<p>Price : INR 2000per person</p>
							<input type=text id=t13 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t13","t14")><input type=text id=t14 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(7,"t13","t14")>
						<input type=button value="Close" onclick=package1(7,"t13","t14")>
					</div>
					<div class=d3 onclick=package1(7)>
						<img src="P\knsi1.jpg">
						<p>LakshmiDevi Temple<br>2days 1 night<br>Price :INR 2000per person</p>
					</div>
					</td>
					<td>
					<div id=d8 class=d2>
						<img src="P\knsi2.jpg" alt="Brahmeshvara Temple" class=img1>
						<h1 class=hd2>Brahmeshvara Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>The temple is dedicated to Eshwara and the presence of Brahma on the doorway leads to the naming 
						of the diety as Brahmeshwara.</p>
						<div class=dd>
							<p>Price : INR 2000per person</p>
							<input type=text id=t15 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t15","t16")><input type=text id=t16 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(8,"t15","t16")>
						<input type=button value="Close" onclick=package1(8,"t15","t16")>
					</div>
					<div class=d3 onclick=package1(8)>
						<img src="P\knsi2.jpg">
						<p>Brahmeshvara Temple<br>2days 1 night<br>Price :2000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d9 class=d2>
						<img src="P\knsi3.jpg" alt="Lakshmi Narayan Temple" class=img1>
						<h1 class=hd2>Lakshmi Narayan Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Lakshminarayana temple of Sri Lakshminarayana is situated in the small town of 
						Hosaholalu which is in the Krishnarajapet taluk of Mandya district.</p>
						<div class=dd>
							<p>Price : INR 2200per person</p>
							<input type=text id=t17 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2200,"t17","t18")><input type=text id=t18 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(9,"t17","t18")>
						<input type=button value="Close" onclick=package1(9,"t17","t18")>
					</div>
					<div class=d3 onclick=package1(9)>
						<img src="P\knsi3.jpg">
						<p>Lakshmi Narayan Temple<br>2days 1 night<br>Price :INR 2200per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="kndi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d10 class=d2>
						<img src="P\kndi2.jpg" alt="Karnataka Tour" class=img1>
						<h1 class=hd2>Karnataka Tour</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>We will visit all the beautiful places in Karnataka</p>
						<div class=dd>
							<p>Price : INR 8000per person</p>
							<input type=text id=t19 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(8000,"t19","t20")><input type=text id=t20 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(10,"t19","t20")>
						<input type=button value="Close" onclick=package1(10,"t19","t20")>
					</div>
					<div class=d3 onclick=package1(10)>
						<img src="P\kndi2.jpg">
						<p>Karnataka Tour<br>6days 5 night<br>Price :INR 8000per person</p>
					</div>
					</td>
					<td>
					<div id=d11 class=d2>
						<img src="P\kndi1.jpg" alt="Bangalore" class=img1>
						<h1 class=hd2>Bangalore</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Places we visit : Bangalore Palace , Wonderla , Nandi Hills , Skandagiri , Snow City
						, Innovative Film City</p>
						<div class=dd>
							<p>Price : INR 6500per person</p>
							<input type=text id=t21 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(6500,"t21","t22")><input type=text id=t22 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(11,"t21","t22")>
						<input type=button value="Close" onclick=package1(11,"t21","t22")>
					</div>
					<div class=d3 onclick=package1(11)>
						<img src="P\kndi1.jpg">
						<p>Bangalore<br>3days 2 night<br>Price :INR 6500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d12 class=d2>
						<img src="P\kndi3.jpg" alt="Chikmagalur" class=img1>
						<h1 class=hd2>Chikmagalur</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Places we visit : Kudremukh National Park , Hebbe Falls , Visit a Tea Plantation , 
						Sharadamba Temple , Coffee Museum , Kavikal Gandi ViewPoint</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t23 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t23","t24")><input type=text id=t24 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(12,"t23","t24")>
						<input type=button value="Close" onclick=package1(12,"t23","t24")>
					</div>
					<div class=d3 onclick=package1(12)>
						<img src="P\kndi3.jpg">
						<p>Chikmagalur<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
					<td>
					<div id=d13 class=d2>
						<img src="P\kndi4.jpg" alt="Mysore" class=img1>
						<h1 class=hd2>Mysore</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>Places we visit : Mysore Palace , Brindavan Gardens , Sri Chamundeshwari Temple 
						, GRS Fantasy Park , Melody World Wax Museum</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t25 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t25","t26")><input type=text id=t26 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(13,"t25","t26")>
						<input type=button value="Close" onclick=package1(13,"t25","t26")>
					</div>
					<div class=d3 onclick=package1(13)>
						<img src="P\kndi4.jpg">
						<p>Mysore<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr color=black size=3 noshade>
			<br><br>
			<a name=kr><h1>Kerala</h2></a>
			<p class=p2>Kerala's culture and traditions, coupled with its varied demographics, have made the state one of the most popular 
			tourist destinations in India. In 2012, National Geographic's Traveller magazine named Kerala as one of the 
			"ten paradises of the world" and "50 must see destinations of a lifetime".</p>
			<h2>Packages</h2>
			<h3><a name="krwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d14 class=d2>
						<img src="P\krwi1.jpg" alt="Periyar Wildlife Santuary" class=img1>
						<h1 class=hd2>Periyar Wildlife Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
			
						<p class=para>It is notable as an elephant reserve and a tiger reserve. </p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t27 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t27","t28")><input type=text id=t28 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(14,"t27","t28")>
						<input type=button value="Close" onclick=package1(14,"t27","t28")>
					</div>
					<div class=d3 onclick=package1(14)>
						<img src="P\krwi1.jpg">
						<p>Periyar Wildlife Santuary<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
					<td>
					<div id=d15 class=d2>
						<img src="P\krwi2.jpg" alt="Neyyar Wildlife Santuary" class=img1>
						<h1 class=hd2>Neyyar Wildlife Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The Neyyar Wildlife Sanctuary is the habitat of over a hundred 
						species of fauna including the Asian Elephant, tiger, leopard, Slender Loris and reptiles and amphibians 
						like the King Cobra, Travancore Tortoise, etc. </p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t29 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t29","t30")><input type=text id=t30 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(15,"t29","t30")>
						<input type=button value="Close" onclick=package1(15,"t29","t30")>
					</div>
					<div class=d3 onclick=package1(15)>
						<img src="P\krwi2.jpg">
						<p>Neyyar Wildlife Santuary<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="krhi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d16 class=d2>
						<img src="P\krhi1.jpg" alt="All Forts Together" class=img1>
						<h1 class=hd2>All Forts Together</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Place We Visit : Bekal Fort , St Angelo Fort ,Chandragiri Fort , Thalassery Fort</p>
						<div class=dd>
							<p>Price : INR 5000per person</p>
							<input type=text id=t31 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5000,"t31","t32")><input type=text id=t32 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(16,"t31","t32")>
						<input type=button value="Close" onclick=package1(16,"t31","t32")>
					</div>
					<div class=d3 onclick=package1(16)>
						<img src="P\krhi1.jpg">
						<p>All Forts Together<br>3days 2 night<br>Price :INR 5000per person</p>
					</div>
					</td>
					<td>
					<div id=d17 class=d2>
						<img src="P\krhi2.jpg" alt="Bekal Fort" class=img1>
						<h1 class=hd2>Bekal Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The beautiful walkway, illuminated beach and the grand architecture of the Bekal Fort make this 
						place a favourite among the masses</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t33 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t33","t34")><input type=text id=t34 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(17,"t33","t34")>
						<input type=button value="Close" onclick=package1(17,"t33","t34")>
					</div>
					<div class=d3 onclick=package1(17)>
						<img src="P\krhi2.jpg">
						<p>Bekal Fort<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d18 class=d2>
						<img src="P\krhi3.jpg" alt="Palakkad Fort" class=img1>
						<h1 class=hd2>Palakkad Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>the Palakkad Fort which is often referred as the Tipu Sultan Fort, is one of 
						the major attractions in Palakkad.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t35 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t35","t36")><input type=text id=t36 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(18,"t35","t36")>
						<input type=button value="Close" onclick=package1(18,"t35","t36")>
					</div>
					<div class=d3 onclick=package1(18)>
						<img src="P\krhi3.jpg">
						<p>Palakkad Fort<br>2days 1 night<br>Price :4000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="krsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d19 class=d2>
						<img src="P\krsi1.jpg" alt="All temples Together" class=img1>
						<h1 class=hd2>All temples Together</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Ettumanoor Mahadeva Temple , Vadakkunathan Temple , Mannarasala Nagaraja Temple
						, Sree Padmanabhaswamy Temple , Sabarimala Temple , Guruvayoor Temple , Attukal Bhagavathy Temple</p>
						<div class=dd>
							<p>Price : INR 6500per person</p>
							<input type=text id=t37 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(6500,"t37","t38")><input type=text id=t38 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(19,"t37","t38")>
						<input type=button value="Close" onclick=package1(19,"t37","t38")>
					</div>
					<div class=d3 onclick=package1(19)>
						<img src="P\krsi1.jpg">
						<p>All temples Together<br>6days 5 night<br>Price :INR 6500per person</p>
					</div>
					</td>
					<td>
					<div id=d20 class=d2>
						<img src="P\krsi2.jpg" alt="Sabrimala Lord Ayyappa Temple" class=img1>
						<h1 class=hd2>Sabrimala Lord Ayyappa Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Sabarimala Sree Dharma Sastha Temple, dedicated to Lord Ayyappa, is the most famous 
						and prominent among all the Sastha temples in Kerala</p>
						<div class=dd>
							<p>Price : INR 2000per person</p>
							<input type=text id=t39 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t39","t40")><input type=text id=t40 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(20,"t39","t40")>
						<input type=button value="Close" onclick=package1(20,"t39","t40")>
					</div>
					<div class=d3 onclick=package1(20)>
						<img src="P\krsi2.jpg">
						<p>Sabrimala Lord Ayyappa Temple<br>2days 1 night<br>Price :INR 2000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d21 class=d2>
						<img src="P\krsi3.jpg" alt="Guruvayoor" class=img1>
						<h1 class=hd2>Guruvayoor</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Guruvayur Devaswom is a Hindu temple dedicated to Lord Guruvayurappan located in the 
						small town of Guruvayur - Kerala</p>
						<div class=dd>
							<p>Price : INR 2000per person</p>
						<input type=text id=t41 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t41","t42")><input type=text id=t42 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(21,"t41","t42")>
						<input type=button value="Close" onclick=package1(21,"t41","t42")>
					</div>
					<div class=d3 onclick=package1(21)>
						<img src="P\krsi3.jpg">
						<p>Guruvayoor<br>2days 1 night<br>Price :INR 2000per person</p>
					</div>
					</td>
					<td>
					<div id=d22 class=d2>
						<img src="P\krsi4.jpg" alt="Sri Padmanabhaswamy Temple" class=img1>
						<h1 class=hd2>Guruvayoor</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Guruvayur Devaswom is a Hindu temple dedicated to Lord Guruvayurappan located in the 
						small town of Guruvayur - Kerala</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
						<input type=text id=t43 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t43","t44")><input type=text id=t44 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(22,"t43","t44")>
						<input type=button value="Close" onclick=package1(22,"t43","t44")>
					</div>
					<div class=d3 onclick=package1(22)>
						<img src="P\krsi4.jpg">
						<p>Sri Padmanabhaswamy Temple<br>2days 1 night<br>Price :2500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="krdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d23 class=d2>
						<img src="P\krdi1.jpg" alt="Munnar" class=img1>
						<h1 class=hd2>Munnar</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Echo Point , Attukad Waterfalls , TATA Tea Museum , Eravikulam National Park
						, Wonder Valley Adventure & Amusement Park , Marayoor Dolmens , Chinnar Wildlife Sanctuary</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t45 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t45","t46")><input type=text id=t46 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(23,"t45","t46")>
						<input type=button value="Close" onclick=package1(23,"t45","t46")>
					</div>
					<div class=d3 onclick=package1(23)>
						<img src="P\krdi1.jpg">
						<p>Munnar<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
					<td>
					<div id=d24 class=d2>
						<img src="P\krdi2.jpg" alt="Kochi" class=img1>
						<h1 class=hd2>Kochi</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Chottanikara Bhagavathy Temple , Andhakaranazhi Beach , Mangalavanam Bird Sanctuary
						, Athirapally Falls , Mattancherry Palace , Wonderla Amusement Park , Gowreeswara Temple Cherai</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t47 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t47","t48")><input type=text id=t48 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(23,"t47","t48")>
						<input type=button value="Close" onclick=package1(23,"t47","t48")>
					</div>
					<div class=d3 onclick=package1(24)>
						<img src="P\krdi2.jpg">
						<p>Kochi<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d25 class=d2>
						<img src="P\krdi3.jpg" alt="Whole Kerala Tour" class=img1>
						<h1 class=hd2>Whole Kerala Tour</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We will visit All the beautiful places of Kerela</p>
						<div class=dd>
							<p>Price : INR 7500per person</p>
							<input type=text id=t49 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(7500,"t49","t50")><input type=text id=t50 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(25,"t49","t50")>
						<input type=button value="Close" onclick=package1(25,"t49","t50")>
					</div>
					<div class=d3 onclick=package1(25)>
						<img src="P\krdi3.jpg">
						<p>Whole Kerala Tour<br>6days 5 night<br>Price :7500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr color=black size=3 noshade>
			<br><br>
			<a name=tn><h1>Tamil Nadu</h1></a>
			<p class=p2>The state boasts some of the grand Hindu temples built-in Dravidian architecture. The Nilgiri Mountain Railway, 
			Brihadishwara Temple in Thanjavur, Gangaikonda Cholapuram and the Airavatesvara Temple in Darasuram (Great Chola Temples) and 
			the Shore Temple along with the collection of other monuments in Mamallapuram</p>
			<h2>Packages</h2>
			<h3><a name="tnwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d26 class=d2>
						<img src="P\tnwi1.jpg" alt="Mudumalai Santuary" class=img1>
						<h1 class=hd2>Mudumalai Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The protected area is home to several endangered and vulnerable species including 
						Indian elephant, Bengal tiger, gaur and Indian leopard.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t51 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t51","t52")><input type=text id=t52 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(26,"t51","t52")>
						<input type=button value="Close" onclick=package1(26,"t51","t52")>
					</div>
					<div class=d3 onclick=package1(26)>
						<img src="P\tnwi1.jpg">
						<p>Mudumalai Santuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d27 class=d2>
						<img src="P\tnwi2.jpg" alt="Vallanadu Santuary" class=img1>
						<h1 class=hd2>Vallanadu Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Vallanadu Wildlife Sanctuary is a protected area of Tamil Nadu in South India created for the 
						protection of blackbuck antelope. </p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t53 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t53","t54")><input type=text id=t54 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(27,"t53","t54")>
						<input type=button value="Close" onclick=package1(27,"t53","t54")>
					</div>
					<div class=d3 onclick=package1(27)>
						<img src="P\tnwi2.jpg">
						<p>Vallanadu Santuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d28 class=d2>
						<img src="P\tnwi3.jpg" alt="Viralimalai Santuary" class=img1>
						<h1 class=hd2>Viralimalai Santuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Viralimalai Peacock Sanctuary based near Tiruchirappalli is a hub for different 
						wild species of peacocks.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t55 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t55","t56")><input type=text id=t56 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(28,"t55","t56")>
						<input type=button value="Close" onclick=package1(28,"t55","t56")>
					</div>
					<div class=d3 onclick=package1(28)>
						<img src="P\tnwi3.jpg">
						<p>Viralimalai Santuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="tnsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d29 class=d2>
						<img src="P\tnsi1.jpg" alt="Murugan Temple" class=img1>
						<h1 class=hd2>Murugan Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>One of the prominent religious shrines, Thiruparankundram Murugan Temple is among
						the 6 temples of Lord Murugan</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t57 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t57","t58")><input type=text id=t58 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(29,"t57","t58")>
						<input type=button value="Close" onclick=package1(29,"t57","t58")>
					</div>
					<div class=d3 onclick=package1(29)>
						<img src="P\tnsi1.jpg">
						<p>Murugan Temple<br>1days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
					<td>
					<div id=d30 class=d2>
						<img src="P\tnsi2.jpg" alt="Meenakshi Temple" class=img1>
						<h1 class=hd2>Meenakshi Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Meenakshi Amman Temple, also known as Minakshi-Sundareshwara Temple, is one of the oldest 
						and most important temples in India</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t59 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t59","t60")><input type=text id=t60 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(30,"t59","t60")>
						<input type=button value="Close" onclick=package1(30,"t59","t60")>
					</div>
					<div class=d3 onclick=package1(30)>
						<img src="P\tnsi2.jpg">
						<p>Meenakshi Temple<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d31 class=d2>
						<img src="P\tnsi3.jpg" alt="Rameshwaram Temple" class=img1>
						<h1 class=hd2>Rameshwaram Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> Rameswaram Temple is among the popular Hindu Chardham pilgrimages</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t61 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t61","t62")><input type=text id=t62 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(31,"t61","t62")>
						<input type=button value="Close" onclick=package1(31,"t61","t62")>
					</div>
					<div class=d3 onclick=package1(31)>
						<img src="P\tnsi3.jpg">
						<p>Rameshwaram Temple<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="tndi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d32 class=d2>
						<img src="P\tndi1.jpg" alt="Madurai" class=img1>
						<h1 class=hd2>Madurai</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places We Visit : Ramanathaswamy Temple , Jada Thirtham , Dhanushkodi  , Jatayu Tirtham Temple
						, Thiruppullani , Lakshamana Teertham , Kothandaramaswamy Temple</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t63 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t63","t64")><input type=text id=t64 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(30,"t63","t64")>
						<input type=button value="Close" onclick=package1(30,"t63","t64")>
					</div>
					<div class=d3 onclick=package1(32)>
						<img src="P\tndi1.jpg">
						<p>Madurai<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
					<td>
					<div id=d33 class=d2>
						<img src="P\tndi2.jpg" alt="Kanyakumari" class=img1>
						<h1 class=hd2>Kanyakumari</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places to visit : Vivekananda Rock Memorial ,Thiruvalluvar Statue  , 
						Bharatmata Temple , Kanyakumari Beach ,  Padmanabhapuram Palace</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t65 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t65","t66")><input type=text id=t66 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(33,"t65","t66")>
						<input type=button value="Close" onclick=package1(33,"t65","t66")>
					</div>
					<div class=d3 onclick=package1(33)>
						<img src="P\tndi2.jpg">
						<p>Kanyakumari<br>3days 2 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d34 class=d2>
						<img src="P\tndi3.jpg" alt="Chennai" class=img1>
						<h1 class=hd2>Chennai</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places to visit : Marina Beach , Ashtalakshmi Temple ,  Sri Parthasarathy Temple , Kapaleeswarar Temple
						, Vivekananda House , Fort St. George  , Vadapalani Murugan Temple</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t67 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t67","t68")><input type=text id=t68 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(34,"t67","t68")>
						<input type=button value="Close" onclick=package1(34,"t67","t68")>
					</div>
					<div class=d3 onclick=package1(34)>
						<img src="P\tndi3.jpg">
						<p>Chennai<br>3days 2 night<br>Price :INR 4000per person</p>
					</div>
					</td>
					<td>
					<div id=d35 class=d2>
						<img src="P\tndi4.jpg" alt="Tamil Nadu-Full Tour" class=img1>
						<h1 class=hd2>Tamil Nadu-Full Tour</h1>
						<h4 class=hd2>7days 6 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>WE will visit Whole Tamil Nadu in reasonable rates</p>
						<div class=dd>
							<p>Price : INR 7500per person</p>
							<input type=text id=t69 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(7500,"t69","t70")><input type=text id=t70 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(35,"t69","t70")>
						<input type=button value="Close" onclick=package1(35,"t69","t70")>
					</div>
					<div class=d3 onclick=package1(35)>
						<img src="P\tndi4.jpg">
						<p>Tamil Nadu-Full Tour<br>7days 6 night<br>Price :INR 7500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<input type=hidden id=hid1 name=hid1>
			<input type=hidden id=nt name=nt>
			<input type=hidden id=tp name=tp>
		</form>
		</div>
		<footer>
			<h2>States To See Other Tours</h2><br>
			<a href="NorthIndia.php#up">Uttar Pradesh</a><br>
			<a href="NorthIndia.php#mp">Madhya Pradesh</a><br>
			<a href="NorthIndia.php#hp">Himanchal Pradesh</a><br>
			<a href="NorthIndia.php#pun">Punjab</a><br>
			<a href="westIndia.php#rj">Rajasthan</a><br>
			<a href="westIndia.php#gj">Gujarat</a><br>
			<a href="#kn">Karnataka</a><br>
			<a href="eastIndia.php#as">Assam</a><br>
			<a href="#tn">Tamil Nadu</a><br>
			<a href="#kr">Kerala</a><br>
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
				var val=x+147-1;
				document.getElementById("hid1").value=val;
				document.f1.submit();
				}
				else
					alert("Please enter Number of Travelers and calculate the price");
			}
			
		</script>	
	</body>
</html>
	