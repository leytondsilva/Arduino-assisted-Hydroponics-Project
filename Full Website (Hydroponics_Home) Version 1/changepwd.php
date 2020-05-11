<?php
session_start();
$user=isset($_SESSION['username']);
/* print_r($_SESSION);
print_r($_POST); */

	if(isset($_POST['submit']) && !empty($user)){
		$oldpwd=$_POST['oldpwd'];
		$newpwd=$_POST['newpwd'];
		$repeatnewpwd=$_POST['repeatnewpwd'];
		echo "$oldpwd/$newpwd/$repeatnewpwd";
	echo ($user);
	$connect=mysqli_connect("localhost", "root", "","hydroponics")or die("couldn't find server");	
	$queryget=mysqli_query($connect,"SELECT password from login where username='$user'")or die("user doesnt exist");
	$row=mysqli_fetch_assoc($queryget);
	$oldpwddb=$row['password'];
	
	if ($oldpwd==$oldpwddb)
	{
		if($newpwd==$repeatnewpwd)
		{
			$querychange=mysqli_query($connect,"UPDATE login SET password='$newpwd' where username='$user'");
				session_destroy();
				die ("your pwd has been changed <a href='index.php'>login</a> here");
		}
		else echo "new and repeat doesnt match";
	}
	else die("old pwd doesnt match");
	}	
	else 	

?>


<!DOCTYPE html >
<html>
<head>
<title>Profile Settings</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="o.css">
<link rel="stylesheet" type="text/css" href="reference.css" >
<link rel ="icon" href ="Hydro_Logo.PNG" type = "image/x-icon"> 
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

<style>
body {
    background-image: url("Background_Login.jpeg");
        background-repeat:no-repeat;
        background-size:cover;
}


.btn {
  background-color: #4CAF50;
  color: white;
  padding: 1% 1.5%;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding-left: 10%;
  margin: 1% 0 2% 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
</style>


</head>


<body>
<section style="padding-top:10% ;padding-left:38%;font-family: Arial, Helvetica, sans-serif, serif;font-size: 110%">


    <form id="Forms" method="post" action="login.php" >
            <h1 style="color: black; text-align: center;font-family:Arial, Helvetica, sans-serif"><b>Change Password</b></h1>
        <table style="border: 0.5; padding-left: 7%" >
            <tr>
			<td><label for="user_pass"><b>Old Password</b></label></td>
                <td><input type="password" name="oldpwd" placeholder="Enter Old Password" required></td>
            </tr>
            <tr>
                <td><label for="user_pass"><b>New Password</b></label></td>
                <td><input type="password" name="newpwd" placeholder="Enter New Password" required></td>
			</tr>
            <tr>
                <td><label for="user_pass"><b>Confirm New Password</b></label></td>
                <td><input type="password" name="repeatnewpwd" placeholder="Confirm New Password"  required></td>
            </tr>
        </table>
<br>
        <div style="padding-left: 30%"><input type="submit" value="Confirm" class="btn"></div>

    </form>
</section>
</body>
</html>
