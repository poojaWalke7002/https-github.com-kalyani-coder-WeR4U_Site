<?php
session_start();
if($_SESSION['user_name']=='')
{
 header("location:index.php");
}else
{
	session_destroy();
    header("location:http://localhost/WeR4U_Site/SalesExecutive/index.php");
}

?>