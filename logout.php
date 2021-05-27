<?php
	//session_start();
	if ($_SESSION['user_id'])
	{	
		unset($_SESSION['user_id']);
		header("location:index.php");
	}

	if ($_SESSION['developer_id'])
	{
		unset($_SESSION['developer_id']);
		header("location:index.php");
	}
 ?>