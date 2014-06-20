<?php 
	$title="Page d authentification";
	include_once('includes/actions.php');
	include_once('includes/header.php');

if (isset($_POST['action']) && $_POST['action']==='login'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$log = login($username,$password);
	
	if ($log===false){
		echo 'mauvais identifiant';
	}
	
	else{
		session_start();
		$_SESSION['user']=array(
			'id'=>$log['id_user'],
			'username'=>$log['username']);
			
		header("Location: index.php");
	}
}

require_once('view/viewlogin.php');
include_once('includes/footer.php');