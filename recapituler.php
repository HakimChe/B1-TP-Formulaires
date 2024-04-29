<!DOCTYPE hsltml> 
<html lang="fr">
	<head>
		<title> Sanaya </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
<?php 
	if ($_GET["civilite"] == 'mr'){
		$client = 'Monsieur' ; 
	}
	elseif($_GET["civilite"] == 'mme'){
		$client = 'Madame' ;
	}
	else{
		$client = 'Mademoiselle' ;
	}
	
	if ($_GET["contact"] == 'viaMail'){
		$mode2Contact = 'Email' ; 
	}
	elseif($_GET["civilite"] == 'viaSms'){
		$mode2Contact = 'SMS' ;
	}
	else{
		$mode2Contact = 'Appel' ;
	}

	$lesObjets = array(
		"rgnmt" => "Renseignement",
		"reclam" => "Réclamation",
		"cmd" => "Commande"
	) ;
	
	
	$objetSelectionne = $_GET["objet"] ;
	
?>

	<body>
		
		<li> Votre civilité : <?php echo $client ; ?> </li>
		<br/>
		<li> Votre nom : <?php echo strtoupper($_GET['nom']) ; ?> </li>
			<br/>
		<li> Votre prénom : <?php echo ucfirst($_GET['prenom']) ; ?> </li>
			<br/>
		<li> Votre numéro de téléphone : <?php echo $_GET['numeroTel'] ; ?> </li>
			<br/>
		<li> Votre adresse mail : <?php echo $_GET['email'] ; ?>
			<br/><br/>
		<li> L'object de votre demande : <?php foreach( $objetSelectionne as $unobject){
												echo $lesObjets[$unobject] ;
											}
										?> 
			<br/><br/>
		<li> Votre situation : <?php echo $_GET['commentaire'] ; ?> </li>
			<br/>
		<li> Vous avez souhaité d'être recontacter par : <?php echo $mode2Contact ; ?> </li>
		
	</body>



</html>
