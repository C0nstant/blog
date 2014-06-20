<form class="formarticle" action="" method="post">
<input type="hidden" name="action" value="formarticle"/>

<fieldset class="fields">
	<div class="row">
		<label for="title">Titre</label>
		<input type="text" name="title" value="<?php echo $articletitle;
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
		<textarea name="text"> <?php echo $articletexte;
			?></textarea> <!------------------- pas d espace entre ?> et </textarea>--------------------------->
					<!-- ce qui suit permet de tester si un article a été saisie----->
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