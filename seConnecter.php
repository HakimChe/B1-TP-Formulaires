<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sanaya</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
		
		
		<?php
			$connexionOk = FALSE ;
			if( $_POST['nomConnexion'] == 'sanaya' && $_POST['motDePasse'] == 'bio' ){
				$connexionOk = TRUE ;
			}
		
		?>
		
		<h5>
			<?php
				if( $connexionOk ){
					echo "Administrateur connecté." ;
				}
				else {
					echo "Connexion refusée." ;
				}
			
			?>
		</h5>
		
		<a href="authentification.html">
		<?php
		
			if( $connexionOk ){
				echo "Déconnexion" ;
			}
			else{
				echo "Revenir à la page d'acceuil." ;
			}
		
		?>
		</a>
		
	</body>

</html>	
