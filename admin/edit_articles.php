<?php
	$title="Ajouter un article";
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	$query=mysql_query("SELECT text,title FROM articles WHERE id_article=".mysql_real_escape_string($_GET['id_article']));
	$artikle = mysql_fetch_assoc($query);
	
	if ($artikle===false){
	header("Location:articles.php");
	}
?>

<h1>Modifier un article</h1>
<form action="edit_articles.php?id_article=<?php echo $_GET['id_article']; ?>" method="post">

<input type="hidden" name="action" value="edit_articles"/>
<fieldset class="fields">
	<div class="row">
		<label for="title">Titre</label>
		<input type="text" name="title" value="<?php
			if(isset($_POST['title']))
			{
			echo $_POST ['title'];
			} 
			else
			{ 
			echo $artikle['title'];
			}
			?>"/>	
		<!-- ce qui suit permet de tester si un titre a ete saisie----->
		<?php
		if (isset($mess) && isset($mess['title'])){
			echo '<div>'.$mess['title'].'</div>';
			} 
		?>
			
	</div>
	<div class="row">
		<label for="text">Texte</label>
		<textarea name="text"><?php
			if (isset($_POST['text']))
			{
			echo $_POST['text'];
			} 
			else
			{
			echo $artikle['text'];
			}?></textarea> <!------------------- pas d espace entre ?> et </textarea>--------------------------->
					<!-- ce qui suit permet de tester si un aricle a ete saisie----->
			<?php
		if (isset($mess) && isset($mess['text'])){
			echo '<div>'.$mess['text'].'</div>';
			} 
		?>
	</div>
</fieldset>
<fieldset class="action">
		<button type="submit">Enregistrer</button>
</fieldset>
</form>



<?php include_once('includes/footer.php');?>