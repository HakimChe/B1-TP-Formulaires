<!DOCTYPE html>

<?php

	$produitsDisponibles = array(
			
			'Ahibero' ,
			'Ajowan' ,
			'Amande' , 
			'Amiris' ,
			'Aneth'
		) ;
		
	$nomProduit = ucfirst( $_GET[ 'nomProduit' ] ) ;

?>


<html lang="fr">
    <head>
        <title>Sanaya</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
		
		Le produit <strong><?php echo $nomProduit ; ?></strong> est
		
		<?php if( in_array( $nomProduit , $produitsDisponibles ) ) {?>
			disponible.
		<?php } else {?>
			indisponible.
		<?php } ?>
		
		
	</body>
</html>
