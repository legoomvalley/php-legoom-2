<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.gc_maxlifetime',43200);

session_start();
$id= 0;
$usertype=0;
if(isset($_SESSION)){
	$_SESSION['active'] = 1;
	if (!isset($_SESSION['id']))
	{
		if(isset($email)){
			$sql = "SELECT * FROM `user` WHERE `email`='$email'";
			$result = $conn->query($sql); 
			if ($result->num_rows > 0) {        
				while ($row = $result->fetch_assoc()) {
					$_SESSION['id'] =$row['id'];
					$_SESSION['usertype']  = $row['usertype'];
					$legoomers= $row;
				} 
			}
		}else if(isset($_GET['id']) ){
			$id = $_GET['id']; 
			$sql = "SELECT * FROM `user` WHERE `id`='$id'";

			$result = $conn->query($sql); 

			if ($result->num_rows > 0) {        
				while ($row = $result->fetch_assoc()) {
					$usertype = $row['usertype'];
					$legoomers= $row;
				}
			}
		}
	}
	else
	{
		if(!isset($_GET['id']) || $_GET['id'] == "" ){
			$id= $_SESSION['id'];
		}
		
	}
}else {	
	if ($_SERVER['REQUEST_URI']=="/intern-report/register/" || $_SERVER['REQUEST_URI']=="/intern-report/login"){

	}else {// get the request page url
	$_SESSION['request_page'] = $_SERVER['REQUEST_URI'];
	header("Location: /login");
	exit();


	}
	
}
?>
