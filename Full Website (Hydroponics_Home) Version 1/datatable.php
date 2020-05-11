<!DOCTYPE html>
<html>
<head>
<link rel ="icon" href ="Hydro_Logo.PNG" type = "image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="o.css">
<title>Data for Hydroponics </title>
<!-- Navigation -->
<nav class="w3-bar w3-black">
    <a href="Hydroponics_Home.html" class="w3-button w3-bar-item">Home</a>
    <a href="materials.html" class="w3-button w3-bar-item">Materials</a>
    <a href="Procedure.html" class="w3-button w3-bar-item">Procedure</a>
    <a href="Reference.html" class="w3-button w3-bar-item">Reference</a>
    <a href="aboutHydroponics.html" class="w3-button w3-bar-item">About</a>

    <a href="register.php" class="w3-button w3-right w3-bar-item">Register</a>
    <a right="100%" href="Login.html" class="w3-button w3-right w3-bar-item">Login</a>
</nav>

<br>
<br>
<br>
<script type="text/JavaScript">
        function timeRefresh(timeoutPeriod) {
            setTimeout("location.reload(true);", timeoutPeriod);
        }
    </script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #333337;
  text-align: center;
  padding: 8px;
}

tr {
	color:black;
}

body {
    background-image: url("Background_Login.JPEG");
        background-repeat:no-repeat;
        background-size:cover;
}

#wrap {
    z-index: 1;
    position:relative;
}

.grid_1200.boxed {
    width: 1300px!important;
}

.boxed, .boxed2 {
    background-color: whitesmoke;
    width: 89%;
    margin: 0 auto;
    position: relative;
}
</style>

</head>
<body onLoad="JavaScript:timeRefresh(3000);">
<div id="wrap" class="grid_1200 boxed wrap-nicescroll">

<div > <center>

<br>
<p style="font-size:300%"><b>DATA TABLE FOR HYDROPONICS</b></p>
<br>
<table cellspacing="25">
	<tr>
		<th style="background-color:#4CAF50">Humidity</th> 
		<th style="background-color:#4CAF50">Temperature</th>
		<th style="background-color:#4CAF50">Water Level</th>
		<th style="background-color:#4CAF50">Time</th>
	</tr>
<?php

$connect= mysqli_connect("localhost", "root", "", "hydroponics") or die("could not find the server");

$sql = "SELECT * FROM `plant_data`  " or die("sql error");
$result = $connect-> query($sql);
$num_rows=mysqli_num_rows($result);


if( $num_rows!= 0 ) {
	while ($row = $result-> fetch_assoc()) {
		
		echo "<tr><td><b>". $row["humidity"]  ."</b></td><td><b>". $row["temp"] ."</b></td><td><b>". $row["water_level"] ."</b></td><td><b>". $row["clock"] ."</b></td> </tr>";
	}
	echo "</table>";
}
else {
	echo "Data is empty";
	}

?>
</table>
</div>

<div style="padding-left:25%">
<br>
<br>
<p><b>Table Definition :</b></p>
<table>
	<tr>
		<th >Humidity</th>
		<th >A quantity representing the amount of water vapour in the system.</th>
	</tr>
	<tr>
		<th >Temperature </th>
		<th>The degree or intensity of heat present in the system.</th>
	</tr>
	<tr>
		<th >Water Level</th>
		<th >The height reached by the water in the pipes</th>
	</tr>
	<tr>
		<th >Time</th>
		<th>The Time at which the plants were monitored.</th>
	</tr>
</table>
</div>
<br>
<br>
</div>

</body>
</html>