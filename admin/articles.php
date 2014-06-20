<?php
	$title="Gestion des articles";
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	
	if (isset($_GET['action'])&& $_GET['action'] ==='delete_article'){
	mysql_query("DELETE FROM articles WHERE id_article=".
	mysql_real_escape_string($_GET['id_article']));
	
	header("Location:articles.php");
}
	
	$articles=mysql_query('SELECT id_article,title,date FROM articles');
	include_once('includes/header.php');
	require_once('View/viewarticles.php');
	include_once('includes/footer.php');


