<?php
$config= require('config.php');
require_once('functions.php');
$configDB=$config['db'];
connectDB($configDB['host'],
		$configDB['username'],
		$configDB['password'],
		$configDB['db']);
	
	
 if (isset($_POST['action']) && $_POST['action']==='login'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$log = login($username,$password);
	
	if ($log===false){
		echo 'mauvais identifiant';
	}
	
	else{
		session_start();
		$_SESSION['user']=$log['username'];
		header("Location: index.php");
	}
}


 if (isset($_GET['action']) && $_GET['action']==='deconnexion'){
 unset($_SESSION['user']);
 header("location:login.php");
 }
 
 if(isset($_POST['action']) && $_POST['action'] === 'addarticle'){
 $title=$_POST['title'];
 $text=$_POST['text'];

$mess=array();
if (empty($title)){
$mess['title']='veuillez saisir un titre';
}
if (empty($text)){
$mess['text']='veuillez saisir un article'; 
}

if (count($mess)===0){
mysql_query("INSERT INTO articles (title,text,date) 
VALUES ('".mysql_real_escape_string($title)."','".mysql_real_escape_string($text)."',NOW())");
header("location:articles.php");
	}
}

 