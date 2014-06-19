<?php
	$title="Gestion des articles";
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	include_once('includes/header.php');

$query=mysql_query('SELECT id_article,title,date FROM articles');
?>

<!--<h1>gestion des articles</h1>-->

<div class="actions">
	<a href="addarticle.php">Ajouter un article</a>
</div>

<table>
<tr><td>Id</td>
	<td>Titre</td>
	<td>Date</td>
	<td>Actions</td>
</tr>
<?php
	while ($row=mysql_fetch_assoc($query)){
		echo"<tr>
				<td>".$row['id_article']."</td>
				<td>".$row['title']."</td>
				<td>".$row['date'].'</td>
				<td>
					<a href="edit_articles.php?id_article='.$row['id_article'] .'" >Modifier</a>
					<a href="articles.php?action=delete_article&id_article='.$row['id_article'].'">Supprimer</a>
				</td>
			</tr>';
	}
	?>
</table>


<?php require_once('includes/footer.php');?>