<?php
$connect=mysqli_connect("localhost", "root", "","hydroponics")or die("couldn't find server");	
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

If($username && $password)
{

$query=mysqli_query($connect,"SELECT * FROM login where username='$username'");

$numrows=mysqli_num_rows($query);


if ($numrows != 0)
{
	while($rows=mysqli_fetch_assoc($query))
	{
		$dbusername=$rows['username'];
		$dbpassword=$rows['password'];
		
		if($username==$dbusername && $password==$dbpassword)
			
			{
			$_SESSION['username']=$dbusername;
			header('Location: datatable.php');
					
			}
			else echo("Incorrect password");
	}
}
else echo("User Does not Exist!");
}
else die("please enter username and password");
?>
