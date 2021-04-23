<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration') or die(mysqli_error($con));
$sql="SELECT * FROM violationreg";
$records=mysqli_query($con,$sql);

?>


<html>
<head>
	<title>Violation data</title>
	<style>
		button[type=submit]:hover{
      background: blue;
      opacity: 0.7;
    }
    .but{
      width: 10%;
    }
    body {
    background: url('https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjI0MX0&auto=format&fit=crop&w=500&q=60');
    background-repeat: no-repeat;
    
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
button[type=submit]
    {
      width: 100%;
      box-sizing: border-box;
      padding: 10px 0;
      margin-top: 30px;
      outline: none;
      border: none;
      background: grey;
      opacity: 0.7;
      border-radius: 20px;
      font-size: 20px;
      color: black;

    }
    button[type=submit]:hover{
      background: blue;
      opacity: 0.7;
    }

	</style>
</head>
<body>
	<h1>HERE ARE SOME VIOLATION DETAILS</h1>
	<table width="1350px" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<b>
			<th>NAME</th>
			<th>MOBILE</th>
			<th>GENDER</th>
			<th>VIOLATION TYPE</th>
			<th>VEH_DETAILS</th>
			<th>LICENSE NUM</th>
			<th>VEH_COLOR</th>
			<th>VEH_PROPERTY</th>
			<th>DATA_TIME</th>
			<th>LOCATION</th>
			<th>FINE AMT</th>
			<th>TICKET_NO</th>
		</b>

		</tr>
		<?php
		while ($reg=mysqli_fetch_assoc($records)) {
			echo "<tr>";

			echo "<td>".$reg['Name']."</td>";
			echo "<td>".$reg['Mobile']."</td>";
			echo "<td>".$reg['Gender']."</td>";
			echo "<td>".$reg['Violation_type']."</td>";
			echo "<td>".$reg['Vehicle_details']."</td>";
			echo "<td>".$reg['License_num']."</td>";
			echo "<td>".$reg['veh_color']."</td>";
			echo "<td>".$reg['veh_property']."</td>";
			echo "<td>".$reg['Date_time']."</td>";
			echo "<td>".$reg['Location']."</td>";
			echo "<td>".$reg['Fine_amount']."</td>";
			echo "<td>".$reg['Ticket_no']."</td>";
			

			
			echo "</tr>";

			
		}
		?>





	</table>
	 <div class="but">
<a href="home1.php">
 
<button type ="Submit" value="submit">BACK</button></a>
</div>

</body>
</html>