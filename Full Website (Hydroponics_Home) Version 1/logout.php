<?php

session_start();
session_destroy();
echo "Your session is logout <a href='index.php'>login</a> here";
?>