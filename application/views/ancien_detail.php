<html>
<head>
  <title>Fiche personnelle </title>
</head>
<body>
<?php echo $message;?>
<br/><br/>




<?php
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = 'SELECT * FROM GMAncien WHERE GMAN_CODE = $id ';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous les tuples un par un
while ($data = mysql_fetch_array($req)) {
	// on affiche les résultats

	echo 'Civilite : '.$data['GMAN_CIVILITE'].'<br />';
	echo 'Nom : '.$data['GMAN_NOM'].'<br />';
	echo 'Prenom : '.$data['GMAN_PRENOM'].'<br />';
	echo 'Date de naissance : '.$data['GMAN_DATE_DE_NAISSANCE'].'<br />';
	echo 'Lieu de naissance : '.$data['GMAN_LIEU_DE_NAISSANCE'].'<br />';
	echo 'Pays de naissance : '.$data['GMAN_PAYS_DE_NAISSANCE'].'<br />';
    echo 'Nationalité : '.$data['GMAN_NATIONALITE'].'<br />';
	echo 'Adresse : '.$data['GMAN_ADRESSE'].'<br />';
	echo 'Code postal : '.$data['GMAN_CODE_POSTAL'].'<br />';
	echo 'Ville : '.$data['GMAN_VILLE'].'<br />';
	echo 'Pays : '.$data['GMAN_PAYS'].'<br />';
	echo 'Telephone personnel : '.$data['GMAN_TEL_PERSO'].'<br />';
	echo 'Portable : '.$data['GMAN_PORTABLE'].'<br />';
	echo 'Email : '.$data['GMAN_EMAIL'].'<br />';
	echo 'Dernier diplome : '.$data['GMAN_DERNIER_DIPLOME'].'<br />';
	echo 'Titre projet : '.$data['GMAN_TITRE_PROJET'].'<br />';
	echo 'Entreprise projet : '.$data['GMAN_ENTREPRISE_PROJET'].'<br />';
	echo 'Responsable de stage  : '.$data['GMAN_RESP_STAGE'].'<br />';
	echo 'Nature de stage  : '.$data['GMAN_NATURE_STAGE'].'<br />';
	echo 'Promotion  : '.$data['GMAN_PROMOTION'].'<br />';
	echo 'Option : '.$data['GMAN_OPTION'].'<br />';
	echo 'Sigle option : '.$data['GMAN_SIGLE_OPTION'].'<br />';
	echo 'Sigle diplome : '.$data['GMAN_SIGLE_DIPLOME'].'<br />';
	echo 'Observation : '.$data['GMAN_OBSERVATION'].'<br />''<br/>';

}
mysql_free_result ($req);
mysql_close ();
?>
 




</body>
</html>