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
	while ($row=mysql_fetch_assoc($articles)){?>
		<tr>
			<td><?php echo $row['id_article']?></td>
			<td><?php echo $row['title']?></td>
			<td><?php echo $row['date']?></td>
			<td>
				<a href="edit_articles.php?id_article=<?php echo $row['id_article']?>" >Modifier</a>
				<a href="articles.php?action=delete_article&id_article=<?php echo $row['id_article'] ?>">Supprimer</a>
			</td>
		</tr>
	<?php } ?>
</table>


