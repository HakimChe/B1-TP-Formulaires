<!DOCTYPE html>

<?php

	$lesProduits = array(
	
		array( "nom" => "Ahibero" , "categorie" => "hl-ess" ) ,
		array( "nom" => "Ail" , "categorie" => "hl-ess" ) ,
		array( "nom" => "Ajowan" , "categorie" => "hl-ess" ) ,
		array( "nom" => "Amande" , "categorie" => "hl-ess" ) ,
		array( "nom" => "Amyrio" , "categorie" => "hl-ess" ) ,
		array( "nom" => "Calendula" , "categorie" => "mcrt-hlx" ) ,
		array( "nom" => "Millepertuis" , "categorie" => "mcrt-hlx" ) ,
		array( "nom" => "Macadamia" , "categorie" => "mcrt-hlx" ) ,
		array( "nom" => "Arnica" , "categorie" => "mcrt-hlx" ) ,
		array( "nom" => "Ginkgo Biloba" , "categorie" => "ext-plnt" ) ,
		array( "nom" => "Guarana" , "categorie" => "ext-plnt" ) ,
		array( "nom" => "Moringa" , "categorie" => "ext-plnt" ) ,
		array( "nom" => "Prêle" , "categorie" => "ext-plnt" ) ,
		array( "nom" => "Blanche" , "categorie" => "argl" ) ,
		array( "nom" => "Illite verte" , "categorie" => "argl" ) ,
		array( "nom" => "Montmorillonite" , "categorie" => "argl" )

	) ;
	
	$lesCategories = array(
		"hl-ess" => "Huiles Essentielles" ,
		"mcrt-hlx" => "Macérâts Huileux" ,
		"ext-plnt" => "Extraits de Plantes" ,
		"argl" => "Argiles"
	) ;
	
	$categorie = $_GET[ 'categorie' ] ;

?>



<html lang="fr">
    <head>
        <title>Sanaya</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
		
		<h3>Produits de catégorie <?php echo $lesCategories[$categorie] ; ?> :</h3> 
		<form action="selectionCategorie.html" > 
			<ul>
			<?php
		
				foreach( $lesProduits as $unProduit ){
				
					if( $unProduit[ 'categorie' ] == $categorie ){
						echo $unProduit['nom']  ; 
			?>
			 <br>
			 <?php
					}
				}	
		
			?>
			</ul>
		
			<input type="submit" value="Retour" />
		
		</form>
	</body>

</html>	
