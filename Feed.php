<html>
	<body>
		<?php
			$con=new mysqli("localhost","root","","tour");
			echo "Connected Successfully";
			$sql="Select * from feedback";
			$result=$con->query($sql);
			echo "<table border=1>";
			echo "<tr>";
			echo "<th>expierence</th>";
			echo "<th>name</th>";
			echo "<th>contact_no</th>";
			echo "<th>feedback_type</th>";
                        echo "<th>msg</th>";
			if($result->num_rows>0)
				while($row=$result->fetch_assoc()){
					echo "<tr>";
					echo "<td>".$row["expierence"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["contact_no"]."</td>";
					echo "<td>".$row["feedback_type"]."</td>";
                                        echo "<td>".$row["msg"]."</td>";
				}
			echo "</table>";
		?>
	</body>
</html>