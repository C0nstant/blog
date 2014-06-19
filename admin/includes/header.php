<!DOCTYPE html>


<html>
<meta charset="UTF-8" />
<head>


	<title class "bonjour"><?php echo $title ; ?></title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css" media="screen"/>
	<link rel="stylesheet" href="animate.css">
	<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->

</head>

<body>
	<header>
	<ul class="pull-right">
          <li>
		    <?php
              echo date("H:i");
            ?>
		</li>
          <!--<li>
		    <?php
			  $jours = array ("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
			  echo $jours[date ('w', time())];
		    ?>
		</li>-->
          <li>
			<?php
			  echo date ('j/m/Y',time())
		    ?>
			</li>
        </ul>

		<h1 class="blog">Mon blog</h1>
		<nav>
			<ul>
			<?php if(isset($_SESSION) && isset($_SESSION['user'])){ ?>
			<li><a class="accueil" href="index.php">Accueil</a></li>
			<li><a class="articles" href="articles.php">Gestion des articles</a></li>
			<li><a class="cv" href="../CV2.html">CV</a></li>
			<li><a class="site" href="../WWW.C+GRAFIK.FR.html">Mon site</a></li>
			<li><a class="contact" href="#">contact</a></li>
			<li><a class="deconnect" href="?action=deconnexion">Déconnexion </a></li>
			<?php } ?></ul>
		</nav>
	
	</header>
	
	<script>$('.home').addClass('animated pulse');</script> 