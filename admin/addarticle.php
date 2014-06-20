<?php
	$title="Ajouter un article";
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$articletitle='';
	$articletexte='';
	
	
	
	if (isset($_POST['action']) && $_POST['action'] === 'formarticle'){
		$articletitle= $title= $_POST['title'];
		$articletexte= $text= $_POST['text'];
		

			$mess=array();
			if (empty($title)){
				$mess['title']='veuillez saisir un titre';
			}
			if (empty($text)){
				$mess['text']='veuillez saisir un article'; 
			}

			if (count($mess)===0){
				mysql_query("INSERT INTO articles (title,text,date,user) 
				VALUES ('".mysql_real_escape_string($title)."','".mysql_real_escape_string(
				$text)."',NOW(),".$_SESSION['user']['id'].")");
				header("location:articles.php");
			}
}	
	
	include_once('includes/header.php');
	require_once('View/viewaddarticle.php');
	include_once('includes/footer.php');
	