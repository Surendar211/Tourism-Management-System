<?php
	session_start();
?>
<html>
	<head>
		<title>Tour | East India</title>
		<link rel="stylesheet" href="c/navbar.css">
		<link rel="stylesheet" href="c/css1.css">
		<link rel="stylesheet" href="c/popup.css">
		<link rel="stylesheet" href="c/menu1.css">
		<style>
			.d1{
				background-image:url("P/pro_es.jpg");
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
			<h1>East India</h1>
		</div>
		<div id=dd1>
			<h2>Type of Tours<br>State Wise</h2>
			<details>
				<summary class=s1><a href="#as">Assam</a></summary>
				<details>
					<summary class=s2><a href="#aswi">Wildlife</a></summary>
					<p class=p1>
						Kaziranga National Park<br>
						Chakrashila Wildlife Sanctuary
					</p>
				</details>
				<details>
					<summary class=s2><a href="#assi">Spritual</a></summary>
					<p class=p1>
						Kamakhya Temple<br>
						Nabagraha Temple<br>
						Basisthashram
					</p>
				</details>
				<details>
					<summary class=s2><a href="#asdi">District Wise</a></summary>
					<p class=p1>
						Assam Tour<br>
						Guwahati
					</p>
				</details>
			</details>
			<details>
				<summary class=s1><a href="#ap">Arunanchal Pradesh</a></summary>
				<details>
					<summary class=s2><a href="#apwi">Wildlife</a></summary>
					<p class=p1>
						Dibang Wildlife Sanctuary<br>
						Kamlang Wildlife Sanctuary<br>
						Pakke Tiger Reserve
					</p>
				</details>
				<details>
					<summary class=s2><a href="#aphi">Historical</a></summary>
					<p class=p1>
						Jaswant Garh<br>
						Tawang War Memorial
					</p>
				</details>
				<details>
					<summary class=s2><a href="#apsi">Spritual</a></summary>
					<p class=p1>
						Parashuram Kund<br>
						Akashiganga Temple<br>
						Kalachakra Gompa 
					</p>
				</details>
				<details>
					<summary class=s2><a href="#apdi">District Wise</a></summary>
					<p class=p1>
						Itanagar<br>
						Dirang<br>	
						Whole Arunanchal Tour
					</p>
				</details>
			</details>
			<details>
				<summary class=s1><a href="#wb">West Bengal</a></summary>
				<details>
					<summary class=s2><a href="#wbwi">Wildlife</a></summary>
					<p class=p1>
						Raiganj Bird Sanctuary<br>
						Chapramari Wildlife forest<br>
						Mahananda Wildlife Sanctuary
					</p>
				</details>
				<details>
					<summary class=s2><a href="#wbhi">Historical</a></summary>
					<p class=p1>
						Kurumbera Fort<br>
						Buxa Fort<br>
						Bangarh Fort
					</p>
				</details>
				<details>
					<summary class=s2><a href="#wbsi">Spritual</a></summary>
					<p class=p1>
						Dakshineshwar Kali Temple<br>
						Iskon Temple<br>
						Kalighat Kali Temple
					</p>
				</details>
				<details>
					<summary class=s2><a href="#wbdi">District Wise</a></summary>
					<p class=p1>
						Kolkata<br>
						Darjeeling<br>	
						Hooghly<br>
						Whole Bengal Tour
					</p>
				</details>
			</details>
							
		</div>
		<hr width=1000 color=black size=3 noshade>
		<form name=f1 action="pay1.php" method=post>
		<div class=st>
			<a name=as><h1>Assam</h2></a>
			<p class=p2>Assam is the main and oldest state in the North-East Region of India and serves as the gateway to the rest of the 
			Seven Sister States. The land of red river and blue hills, Assam comprises three main geographical areas: the Brahmaputra Valley 
			which stretching along the length of the Brahmaputra river, the Barak Valley extending like a tail, and the intervening Karbi 
			Plateau and North Cachar Hills. </p>
			<h2 align=center>Packages</h2>
			<h3><a name="aswi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d2 class=d2>
						<img src="P\aswi1.jpg" alt="Kaziranga National Park" class=img1>
						<h1 class=hd2>Kaziranga National Park</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The sanctuary, which hosts two-thirds of the world's great one-horned rhinoceroses, is a World Heritage Site.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t3 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t3","t4")><input type=text id=t4 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(2,"t3","t4")>
						<input type=button value="Close" onclick=package1(2,"t3","t4")>
					</div>
					<div class=d3 onclick=package1(2)>
						<img src="P\aswi1.jpg">
						<p>Kaziranga National Park<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
					<td>
					<div id=d3 class=d2>
						<img src="P\aswi2.jpg" alt="Chakrashila Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Chakrashila Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>It is famous for the golden langur and is the second protected habitat for golden langur in India.</p>
						<div class=dd>
							<p>Price : INR 4000per person</p>
							<input type=text id=t5 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4000,"t5","t6")><input type=text id=t6 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(3,"t5","t6")>
						<input type=button value="Close" onclick=package1(3,"t5","t6")>
					</div>
					<div class=d3 onclick=package1(3)>
						<img src="P\aswi2.jpg">
						<p>Chakrashila Wildlife Sanctuary<br>2days 1 night<br>Price :INR 4000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="assi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d4 class=d2>
						<img src="P\assi1.jpg" alt="Kamakhya Temple" class=img1>
						<h1 class=hd2>Kamakhya Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The Kamakhya Temple had been built in reverence to Goddess Kamakhya or Sati, who was one of the numerous incarnations of
						Goddess Durga or Goddess Shakti</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t7 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t7","t8")><input type=text id=t8 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(4,"t7","t8")>
						<input type=button value="Close" onclick=package1(4,"t7","t8")>
					</div>
					<div class=d3 onclick=package1(4)>
						<img src="P\assi1.jpg">
						<p>Kamakhya Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d5 class=d2>
						<img src="P\assi2.jpg" alt="Nabagraha Temple" class=img1>
						<h1 class=hd2>Nabagraha Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> Navagraha temples refers to a cluster of nine separate temples, each an abode of one of the Navagrahas.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t9 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t9","t10")><input type=text id=t10 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(5,"t9","t10")>
						<input type=button value="Close" onclick=package1(5,"t9","t10")>
					</div>
					<div class=d3 onclick=package1(5)>
						<img src="P\assi2.jpg">
						<p>Nabagraha Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d6 class=d2>
						<img src="P\assi3.jpg" alt="Basisthashram" class=img1>
						<h1 class=hd2>Basisthashram</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>This ashram is believed to be the home of famous sage Basistha, also known as "Vasishtha".</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t11 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t11","t12")><input type=text id=t12 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(6,"t11","t12")>
						<input type=button value="Close" onclick=package1(6,"t11","t12")>
					</div>
					<div class=d3 onclick=package1(6)>
						<img src="P\assi3.jpg">
						<p>Basisthashram<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="asdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d7 class=d2>
						<img src="P\asdi1.jpg" alt="Assam Tour" class=img1>
						<h1 class=hd2>Assam Tour</h1>
						<h4 class=hd2>5days 4 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We will visit the whole Assam</p>
						<div class=dd>
							<p>Price : INR 6000per person</p>
							<input type=text id=t13 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(6000,"t13","t14")><input type=text id=t14 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(7,"t13","t14")>
						<input type=button value="Close" onclick=package1(7,"t13","t14")>
					</div>
					<div class=d3 onclick=package1(7)>
						<img src="P\asdi1.jpg">
						<p>Assam Tour<br>5days 4 night<br>Price :INR 6000per person</p>
					</div>
					</td>
					<td>
					<div id=d8 class=d2>
						<img src="P\asdi2.jpg" alt="Guwahati" class=img1>
						<h1 class=hd2>Guwahati</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Assam State Zoo cum Botanical Garden , Nameri National Park , Kamakhya Temple , Guwahati Planetarium
						, Umananda Temple , Afresco Grand Cruise , Accoland</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t15 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t15","t16")><input type=text id=t16 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(8,"t15","t16")>
						<input type=button value="Close" onclick=package1(8,"t15","t16")>
					</div>
					<div class=d3 onclick=package1(8)>
						<img src="P\asdi2.jpg">
						<p>Guwahati<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr color=black size=3 noshade>
			<br><br>
			<a name=ap><h1>Arunanchal Pradesh</h2></a>
			<p class=p2>From lush green mountains to ancient temples, Arunachal Pradesh tourism caters to all tastes and choices. 
			There are many historical edifices, national parks, museums, monasteries, and sacred pilgrimage sites in Arunachal Pradesh.
			Surrounded by lush green mountains, thickly wooded forests, Arunachal Pradesh is a paradise for adventure freaks. Adventure 
			tourism in Arunachal Pradesh offers numerous adrenaline-pumping activities including trekking, hiking, rock 
			climbing, and camping.</p>
			<h2>Packages</h2>
			<h3><a name="apwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d9 class=d2>
						<img src="P\apwi1.jpg" alt="Dibang Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Dibang Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Serving as a home to various flora and fauna, this sanctuary is one of the major tourist attraction and popular 
						bio-diversity hotspots.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t17 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t17","t18")><input type=text id=t18 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(9,"t17","t18")>
						<input type=button value="Close" onclick=package1(9,"t17","t18")>
					</div>
					<div class=d3 onclick=package1(9)>
						<img src="P\apwi1.jpg">
						<p>Dibang Wildlife Sanctuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d10 class=d2>
						<img src="P\apwi2.jpg" alt="Kamlang Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Kamlang Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The sanctuary is the habitat of the four big cat species of India: tiger, leopard, clouded leopard and snow leopard</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t19 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t19","t20")><input type=text id=t20 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(10,"t19","t20")>
						<input type=button value="Close" onclick=package1(10,"t19","t20")>
					</div>
					<div class=d3 onclick=package1(10)>
						<img src="P\apwi2.jpg">
						<p>Kamlang Wildlife Sanctuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d11 class=d2>
						<img src="P\apwi3.jpg" alt="Pakke Tiger Reserve" class=img1>
						<h1 class=hd2>Pakke Tiger Reserve</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>It is home to over 2000 species of plants, 300 species of birds, 40 species of mammals, 30 species of amphibians and 36 
						species of reptiles.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t21 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t21","t22")><input type=text id=t22 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(11,"t21","t22")>
						<input type=button value="Close" onclick=package1(11,"t21","t22")>
					</div>
					<div class=d3 onclick=package1(11)>
						<img src="P\apwi3.jpg">
						<p>Pakke Tiger Reserve<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="aphi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d12 class=d2>
						<img src="P\aphi1.jpg" alt="Jaswant Garh" class=img1>
						<h1 class=hd2>Jaswant Garh</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>It has great landscape and the famous temple of Piplaajmata Mandir.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t23 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t23","t24")><input type=text id=t24 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(12,"t23","t24")>
						<input type=button value="Close" onclick=package1(12,"t23","t24")>
					</div>
					<div class=d3 onclick=package1(12)>
						<img src="P\aphi1.jpg">
						<p>Jaswant Garh<br>2days 1 night<br>Price :3000per person</p>
					</div>
					</td>
					<td>
					<div id=d13 class=d2>
						<img src="P\aphi2.jpg" alt="Tawang War Memorial" class=img1>
						<h1 class=hd2>Tawang War Memorial</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The memorial has been designed using Buddhist architectural and cultural elements.</p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t25 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t25","t26")><input type=text id=t26 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(13,"t25","t26")>
						<input type=button value="Close" onclick=package1(13,"t25","t26")>
					</div>
					<div class=d3 onclick=package1(13)>
						<img src="P\aphi2.jpg">
						<p>Tawang War Memorial<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="apsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d14 class=d2>
						<img src="P\apsi1.jpg" alt="Parashuram Kund" class=img1>
						<h1 class=hd2>Parashuram Kund</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Parshuram Kund is not only a historical or religious site but also a prominent site of natural importance.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t27 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t27","t28")><input type=text id=t28 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(14,"t27","t28")>
						<input type=button value="Close" onclick=package1(14,"t27","t28")>
					</div>
					<div class=d3 onclick=package1(14)>
						<img src="P\apsi1.jpg">
						<p>Parashuram Kund<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d15 class=d2>
						<img src="P\apsi2.jpg" alt="Akashiganga Temple" class=img1>
						<h1 class=hd2>Akashiganga Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> The major reason to visit Akashiganga temple is because you can see a glittering object in afar distance but as one gets 
						closer the shining object disappears. Hence, due to this the devotees from across the world come to take a glance of this phenomenon 
						attraction.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t29 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t29","t30")><input type=text id=t30 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(15,"t29","t30")>
						<input type=button value="Close" onclick=package1(15,"t29","t30")>
					</div>
					<div class=d3 onclick=package1(15)>
						<img src="P\apsi2.jpg">
						<p>Akashiganga Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d16 class=d2>
						<img src="P\apsi3.jpg" alt="Kalachakra Gompa" class=img1>
						<h1 class=hd2>Kalachakra Gompa</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Kalachakra is a 500 years old monastery in Arunachal Pradesh, which makes it quite a famous tourist attraction in the 
						state.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t31 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t31","t32")><input type=text id=t32 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(16,"t31","t32")>
						<input type=button value="Close" onclick=package1(16,"t31","t32")>
					</div>
					<div class=d3 onclick=package1(16)>
						<img src="P\apsi3.jpg">
						<p>Kalachakra Gompa<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="apdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d17 class=d2>
						<img src="P\apdi1.jpg" alt="Itanagar" class=img1>
						<h1 class=hd2>Itanagar</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : Ganga Lake , Ita Fort , Namdapha National Park , Itanagar Wildlife Sanctuary , Gompa Buddhist Temple</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t33 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t33","t34")><input type=text id=t34 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(17,"t33","t34")>
						<input type=button value="Close" onclick=package1(17,"t33","t34")>
					</div>
					<div class=d3 onclick=package1(17)>
						<img src="P\apdi1.jpg">
						<p>Itanagar<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
					<td>
					<div id=d18 class=d2>
						<img src="P\apdi2.jpg" alt="Dirang" class=img1>
						<h1 class=hd2>Dirang</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places we visit : LDL Buddhist Monastery , Dirang Dzong , Sela Pass , National Research Centre on Yak , Kalachakra Gompa
						, Sangti Valley , Namshu Monastery</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t35 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t35","t36")><input type=text id=t36 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(18,"t35","t36")>
						<input type=button value="Close" onclick=package1(18,"t35","t36")>
					</div>
					<div class=d3 onclick=package1(18)>
						<img src="P\apdi2.jpg">
						<p>Dirang<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d19 class=d2>
						<img src="P\apdi3.jpg" alt="Whole Arunanchal Tour" class=img1>
						<h1 class=hd2>Whole Arunanchal Tour</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We will visit all beautiful places of the Arunanchal Pradesh</p>
						<div class=dd>
							<p>Price : INR 7500per person</p>
							<input type=text id=t37 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(7500,"t37","t38")><input type=text id=t38 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(19,"t37","t38")>
						<input type=button value="Close" onclick=package1(19,"t37","t38")>
					</div>
					<div class=d3 onclick=package1(19)>
						<img src="P\apdi3.jpg">
						<p>Whole Arunanchal Tour<br>6days 5 night<br>Price :INR 7500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<br><br>
			<hr color=black size=3 noshade>
			<a name=wb><h1>West Bengal</h2></a>
			<p class=p2>From the mighty Himalayas to the greenery of Gangetic planes, from serene beaches to mangrove 
			estuaries - West Bengal is a land of many natural splendours. Adding to its charm and appeal are the magnificent 
			heritage architecture, colourful folk festivals, beautiful arts and crafts, traditional and contemporary music, 
			theatre and films and delicious ethnic specialities that make West Bengal truly a brilliant experience offering 
			unique diversities.</p>
			<h2>Packages</h2>
			<h3><a name="wbwi">Wildlife</a></h3>
			<table>
				<tr>
					<td>
					<div id=d20 class=d2>
						<img src="P\wbwi1.jpg" alt="Raiganj Bird Sanctuary" class=img1>
						<h1 class=hd2>Raiganj Bird Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We will be amazed to see the wide array of colourful birds in the Kulik Bird Sanctuary. 
						The resident birds include flycatchers, kites, owl, woodpeckers, kingfishers, drongoes and many more.</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t39 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t39","t40")><input type=text id=t40 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(20,"t39","t40")>
						<input type=button value="Close" onclick=package1(20,"t39","t40")>
					</div>
					<div class=d3 onclick=package1(20)>
						<img src="P\wbwi1.jpg">
						<p>Raiganj Bird Sanctuary<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
					<td>
					<div id=d21 class=d2>
						<img src="P\wbwi2.jpg" alt="Chapramari Wildlife forest" class=img1>
						<h1 class=hd2>Chapramari Wildlife forest</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Chapramari is known for its elephant population.Gaur (commonly known as Indian bison) are not uncommon in the Chapramari 
						region. Rhinoceros, Deer, boars, and leopards are also found there.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t41 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t41","t42")><input type=text id=t42 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(21,"t41","t42")>
						<input type=button value="Close" onclick=package1(21,"t41","t42")>
					</div>
					<div class=d3 onclick=package1(21)>
						<img src="P\wbwi2.jpg">
						<p>Chapramari Wildlife forest<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d22 class=d2>
						<img src="P\wbwi3.jpg" alt="Mahananda Wildlife Sanctuary" class=img1>
						<h1 class=hd2>Mahananda Wildlife Sanctuary</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Birds at Mahananda Wildlife Sanctuary includes some very endangered species like Rufous-necked Hornbill, Oriental 
						Pied Hornbill, Great Hornbill etc. Among the others swallow, swift, thrush, babbler, warbler, roller, minivet and sunbird can be 
						found in abundance.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t43 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t43","t44")><input type=text id=t44 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(22,"t43","t44")>
						<input type=button value="Close" onclick=package1(22,"t43","t44")>
					</div>
					<div class=d3 onclick=package1(22)>
						<img src="P\wbwi3.jpg">
						<p>Mahananda Wildlife Sanctuary<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="wbhi">Historical</a></h3>
			<table>
				<tr>
					<td>
					<div id=d23 class=d2>
						<img src="P\wbhi1.jpg" alt="Kurumbera Fort" class=img1>
						<h1 class=hd2>Kurumbera Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>It is a protected monument under the Archaeological Survey of India.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t45 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t45","t46")><input type=text id=t46 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(23,"t45","t46")>
						<input type=button value="Close" onclick=package1(23,"t45","t46")>
					</div>
					<div class=d3 onclick=package1(23)>
						<img src="P\wbhi1.jpg">
						<p>Kurumbera Fort<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
					<td>
					<div id=d24 class=d2>
						<img src="P\wbhi2.jpg" alt="Buxa Fort" class=img1>
						<h1 class=hd2>Buxa Fort</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>This is the one place where proper trek routes are available for nature lovers and you can choose a trail as per your choice 
						of difficulty level.</p>
						<div class=dd>
							<p>Price : INR 3500per person</p>
							<input type=text id=t47 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3500,"t47","t48")><input type=text id=t48 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(24,"t47","t48")>
						<input type=button value="Close" onclick=package1(24,"t47","t48")>
					</div>
					<div class=d3 onclick=package1(24)>
						<img src="P\wbhi2.jpg">
						<p>Buxa Fort<br>2days 1 night<br>Price :INR 3500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d25 class=d2>
						<img src="P\wbhi3.jpg" alt="Fort William" class=img1>
						<h1 class=hd2>Fort William</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Fort William and the surrounding area is a year-round destination for climbers from all over the world.</p>
						<div class=dd>
							<p>Price : INR 2500per person</p>
							<input type=text id=t49 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2500,"t49","t50")><input type=text id=t50 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(25,"t49","t50")>
						<input type=button value="Close" onclick=package1(25,"t49","t50")>
					</div>
					<div class=d3 onclick=package1(25)>
						<img src="P\wbhi3.jpg">
						<p>Fort William<br>2days 1 night<br>Price :INR 2500per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="wbsi">Spiritual</a></h3>
			<table>
				<tr>
					<td>
					<div id=d26 class=d2>
						<img src="P\wbsi1.jpg" alt="Dakshineshwar Kali Temple" class=img1>
						<h1 class=hd2>Dakshineshwar Kali Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>This place is historically famous for the great temple of Goddess Kali, locally known as Maa Bhabatarini Mandir.</p>
						<div class=dd>
							<p>Price : INR 2000per person</p>
							<input type=text id=t51 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(2000,"t51","t52")><input type=text id=t52 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(26,"t51","t52")>
						<input type=button value="Close" onclick=package1(26,"t51","t52")>
					</div>
					<div class=d3 onclick=package1(26)>
						<img src="P\wbsi1.jpg">
						<p>Dakshineshwar Kali Temple<br>2days 1 night<br>Price :INR 2000per person</p>
					</div>
					</td>
					<td>
					<div id=d27 class=d2>
						<img src="P\wbsi2.jpg" alt="Iskon Temple" class=img1>
						<h1 class=hd2>Iskon Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>The entire temple is nothing less than a palace of modern times with the biggest chandeliers and state of the art 
						technology to broadcast prayers and offerings live worldwide.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t53 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t53","t54")><input type=text id=t54 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(27,"t53","t54")>
						<input type=button value="Close" onclick=package1(27,"t53","t54")>
					</div>
					<div class=d3 onclick=package1(27)>
						<img src="P\wbsi2.jpg">
						<p>Iskon Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d28 class=d2>
						<img src="P\wbsi3.jpg" alt="Kalighat Kali Temple" class=img1>
						<h1 class=hd2>Kalighat Kali Temple</h1>
						<h4 class=hd2>2days 1 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para> Kalighat represents the site where the toes of the right foot of Dakshayani or Sati fell.</p>
						<div class=dd>
							<p>Price : INR 3000per person</p>
							<input type=text id=t55 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(3000,"t55","t56")><input type=text id=t56 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(28,"t55","t56")>
						<input type=button value="Close" onclick=package1(28,"t55","t56")>
					</div>
					<div class=d3 onclick=package1(28)>
						<img src="P\wbsi3.jpg">
						<p>Kalighat Kali Temple<br>2days 1 night<br>Price :INR 3000per person</p>
					</div>
					</td>
				</tr>
			</table>
			<hr width=1000 color=black size=3 noshade>
			<h3><a name="wbdi">District Wise</a></h3>
			<table>
				<tr>
					<td>
					<div id=d29 class=d2>
						<img src="P\wbdi1.jpg" alt="Kolkata" class=img1>
						<h1 class=hd2>Kolkata</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places We Visit : Victoria Memorial , Belur Math ,  Science City Kolkata , Dakshineswar Temple , Indian Museum , 
						Nicco Park , Fort William</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t57 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t57","t58")><input type=text id=t58 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(29,"t57","t58")>
						<input type=button value="Close" onclick=package1(29,"t57","t58")>
					</div>
					<div class=d3 onclick=package1(29)>
						<img src="P\wbdi1.jpg">
						<p>Kolkata<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
					<td>
					<div id=d30 class=d2>
						<img src="P\wbdi2.jpg" alt="Darjeeling" class=img1>
						<h1 class=hd2>Darjeeling</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places We Visit : Kanchenjunga Mountain , Padmaja Naidu Himalayan Zoological Park , Mahakal Temple , Tiger Hill ,
						Batasia Loop , Sandakphu Trek , Darjeeling Rangit Valley Ropeway ,Ghum Monastery</p>
						<div class=dd>
							<p>Price : INR 5500per person</p>
							<input type=text id=t59 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(5500,"t59","t60")><input type=text id=t60 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(30,"t59","t60")>
						<input type=button value="Close" onclick=package1(30,"t59","t60")>
					</div>
					<div class=d3 onclick=package1(30)>
						<img src="P\wbdi2.jpg">
						<p>Darjeeling<br>3days 2 night<br>Price :INR 5500per person</p>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id=d31 class=d2>
						<img src="P\wbdi3.jpg" alt="Hooghly" class=img1>
						<h1 class=hd2>Hooghly</h1>
						<h4 class=hd2>3days 2 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>Places We Visit : Hangseshwari Temple , Hooghly Imambara , Bandel Church , Radhagovindjiu Temple , Chandannagar Museum ,
						Susana Anna Maria Tomb</p>
						<div class=dd>
							<p>Price : INR 4500per person</p>
							<input type=text id=t61 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(4500,"t61","t62")><input type=text id=t62 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(31,"t61","t62")>
						<input type=button value="Close" onclick=package1(31,"t61","t62")>
					</div>
					<div class=d3 onclick=package1(31)>
						<img src="P\wbdi3.jpg">
						<p>Hooghly<br>3days 2 night<br>Price :INR 4500per person</p>
					</div>
					</td>
					<td>
					<div id=d32 class=d2>
						<img src="P\wbdi4.jpg" alt="Whole Bengal Tour" class=img1>
						<h1 class=hd2>Whole Bengal Tour</h1>
						<h4 class=hd2>6days 5 night</h4>
						<h4 class=hd2>Stay In : Paradise House</h4>
						<br>
						<p class=para>We Visit All Beautiful Places Of West Bengal</p>
						<div class=dd>
							<p>Price : INR 7500per person</p>
							<input type=text id=t63 placeholder="No. of Travelers"/><br><br>
							<input type=button value="Calculate Price" class=i1 onclick=Cal(7500,"t63","t64")><input type=text id=t64 placeholder="Total Price">
						</div>
						<input type=button value="Book Now" onclick=hid(32,"t63","t64")>
						<input type=button value="Close" onclick=package1(32,"t63","t64")>
					</div>
					<div class=d3 onclick=package1(32)>
						<img src="P\wbdi4.jpg">
						<p>Whole Bengal Tour<br>6days 5 night<br>Price :INR 7500per person</p>
					</div>
					</td>
				</tr>
			</table>
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
			<a href="westIndia.php#rj">Rajasthan</a><br>
			<a href="westIndia.php#gj">Gujarat</a><br>
			<a href="southIndia.php#kn">Karnataka</a><br>
			<a href="#as">Assam</a><br>
			<a href="southIndia.php#tn">Tamil Nadu</a><br>
			<a href="southIndia.php#kr">Kerala</a><br>
			<a href="#ap">Arunanchal Pradesh</a><br>
			<a href="#wb">West Bengal</a><br>
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
				var val=x+181-1;
				document.getElementById("hid1").value=val;
				document.f1.submit();
				}
				else
					alert("Please enter Number of Travelers and calculate the price");
			}
			
		</script>	
	</body>
</html>
	