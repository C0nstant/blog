<?php
	$title="Ajouter un article";
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	
	$articletitle=$article['title'];
	$articletexte=$article['texte'];
	
	if(isset($_POST['action']) && $_POST['action'] === 'formarticle'){
		$articletitle==$title=$_POST['title'];
		$articletexte==$text=$_POST['text'];
		$artikle=$_GET['id_article'];
	 
		$mess=array();
		if (empty($title)){
			$mess['title']='veuillez saisir un titre';
		}
		if (empty($text)){
			$mess['text']='veuillez saisir un article'; 
		}

		if (count($mess)===0){
			mysql_query("UPDATE articles SET title='".mysql_real_escape_string($title)."',
			text='".mysql_real_escape_string($text)."'WHERE id_article=".mysql_real_escape_string($artikle));
			header("location:articles.php");
		}
}

	
	$artikle=mysql_query("SELECT id_article,title,date FROM articles");
	

	
	include_once('includes/header.php');
	require_once('View/viewedit.php');
	include_once('includes/footer.php');