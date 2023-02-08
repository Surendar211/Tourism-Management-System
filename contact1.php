<html>
	<body>
		<?php
			$con=new mysqli("localhost","root","","tour");
			echo "Connected Successfully";
			$sql="Select * from contact";
			$result=$con->query($sql);
			echo "<table border=1>";
			echo "<tr>";
			echo "<th>cname</th>";
			echo "<th>cemail</th>";
			echo "<th>cont</th>";
			echo "<th>sub</th>";
                        echo "<th>msg</th>";
			if($result->num_rows>0)
				while($row=$result->fetch_assoc()){
					echo "<tr>";
					echo "<td>".$row["cname"]."</td>";
					echo "<td>".$row["cemail"]."</td>";
					echo "<td>".$row["cont"]."</td>";
					echo "<td>".$row["sub"]."</td>";
                                        echo "<td>".$row["msg"]."</td>";
				}
			echo "</table>";
		?>
	</body>
</html>