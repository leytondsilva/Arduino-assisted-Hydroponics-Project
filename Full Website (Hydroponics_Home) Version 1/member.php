<?php
session_start();
echo "Welcome" .$_SESSION['username']."here";
if( isset( $_SESSION['counter'] ) )
	{
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".$_SESSION['counter'];
   $msg .= "in this session.";
   
echo ($msg);   
echo "Click here to logout <a href='logout.php'> logout </a> here";
echo "Click here to change your pwd <a href='changepwd.php'> Change pwd </a> here";
?>