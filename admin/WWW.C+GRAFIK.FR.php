

<!DOCTYPE html>  <!--on indique au navigateur que le doc est codé en html-->


<html><!--le html commence ici-->




<head>  <!-- la section HEAD commence ici: elle contient des indications destinées au navigateur
qui ne sont pas sensées participer directement a l affichage du contenu-->



		<!--la balise qui suit est le titre de la page
		(celui qui vas s afficher dans la barre de titre du navigateur 
		ainsi que dans les pages de resultats des moteurs de recherche)
		TRES IMPORTANT POUR POUR LE REFERENCEMENT DE LA PAGE!!-->

<title>C+GRAFIK</title>

		<!-- on precise que les caracteres contenus dans le document
		sont encodés selon la norme UTF-8(UNICODE) -->
<meta charset="UTF-8"/>
    <style type="text/css">
	
	
    html, body
	{
	height:100%
	}
/********************************************************************************************/	
	body
        {
		background: black;
        background-image: url(images-site/fond.png);
        background-repeat: no-repeat;
        background-position:center center;
		background-size:100%;
		}
 /***************************************************************************************/  
    #distance
	{
	width: 100%;
    height: 50%;
    margin-bottom: -272px; /* half of container's height */
    float: left;
	border:solid 1px white;
	}
/***************************************************************************************/
	#container
	{
	margin: 0 auto;
    position: relative; /* puts container in front of distance */
    height: 544px;
    clear: left;
    width: 100%;
    background-image: url(../images/spirale.jpg);
    background-repeat: no-repeat;
    background-position: center;
    min-width: 591px;
	border:solid 1px red;
	}
/******************************************************************************************/	
	#log
	{
	position: relative;
    height: 100%;
    width: 591px; /* centrage horizontal, supprimer pour caler à gauche */
    margin: 0 auto;
	border:solid 1px blue;
	}

  
</style>
		
	

		<!-- la section HEAD se termine ici-->
</head>


		<!--la section BODY commence ici : elle contient tout ce qui vas s afficher sur la page -->
<body>


                    <!-- <h1><b><u>C+GRAFIK</u></b></h1>-->




<div id="distance"></div>       
	<div id="container">
		<div id="log" style="background-image:url(images-site/LOGOC+GRAFIK.png); "> 
			<a href="galerie.html" style="position: absolute; top: 120px; left: 165px; border: solid 0px red; display: block; height: 300px; width: 280px;">
			</a>
        </div>
		</div>
	</div>
  


<!-- <a href="mailto/cplus.grafik@gmail.com"><h2style="border: solid 1 px white"><cplus.grafik@gmail.com></h2></a>-->

	
	
	
		<!--le BODY se termin ici-->
</body>

		<!--le code HTML se termine ici-->
</html>
		