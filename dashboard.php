<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration') or die(mysqli_error($con));
$sql="SELECT * FROM emergencyreg";
$records=mysqli_query($con,$sql);

?>


<html>
<head>
	<title>Emergency data</title>
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
	<h1>HERE ARE SOME EMERGENCY DETAILS</h1>
	<table width="1300px" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>COP NAME</th>
			<th>COP MOBILE</th>
			<th>LOCATION</th>
			<th>ACCIDENT TYPE</th>
			<th>PRIORITY</th>
			<th>NO.OF PEOPLE AFFECTED</th>
		</tr>
		<?php
		while ($reg=mysqli_fetch_assoc($records)) {
			echo "<tr>";

			echo "<td>".$reg['Cop_name']."</td>";
			echo "<td>".$reg['Cop_mobile']."</td>";
			echo "<td>".$reg['Location']."</td>";
			echo "<td>".$reg['Accident_type']."</td>";
			echo "<td>".$reg['Priority']."</td>";
			echo "<td>".$reg['no_of_people_affected']."</td>";
			
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