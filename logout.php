<?php 

session_start();

if(isset($_SESSION['linkup_userid']))
{
	$_SESSION['linkup_userid'] = NULL;
	unset($_SESSION['linkup_userid']);

}

header("Location: login.php");
die;
