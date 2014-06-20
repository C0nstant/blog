<h1>Identification</h1>
<hr />
	<!--<p>Vous devez vous authentifier pour accéder a l'espace protégé.</p>-->
	<form class="login" action="login.php" method="post">
	<input type="hidden" name="action" value="login" />
		<fieldset class="fields">
			<div class="row">
				<label for="username">Votre nom d'utilisateur:&nbsp;</label>
				<input class="arrondi" type="text" name="username" value="<?php 
					if (isset ($_POST['username'])) {
						echo $_POST['username'];
					}
				?>"/>
			</div>
			
			<div class="row">
				<label for ="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Votre mot de passe:</label>
				<input class="arrondi"type="password" name="password" value="<?php 
					if (isset ($_POST['password'])){
						echo $_POST['password'];
					}
				?>" />
				
				<!--input type="password"(pointillés remplacent les caractères entrés)-->
				
			</div>
		</fieldset>
		
		<fieldset class="action">
			<button type="submit">login</button>
		</fieldset>
	</form>