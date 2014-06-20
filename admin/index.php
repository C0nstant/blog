

<?php
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$title="Mon espace administration";
	include_once('includes/header.php');      
?>

	<!--<h1>Mon Administration</h1>-->
	
	Bonjour <?php echo $_SESSION['user']['username'];?>
<p>&nbsp;</p>
<?php
	include_once('includes/footer.php');
?>



