<?php

include 'config.php';
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$sexe = $_POST["sexe"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$role= 0;
$valide=true;
	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $req=$db->prepare('SELECT count(id_users) As nb  FROM users WHERE mail_users =:mail');
	$req->execute(array("mail" => $mail));
	$data = $req->fetch();
	if($data['nb'] == 0){
		$stmt=$db->prepare('INSERT INTO users (nom_users,prenom_users,mail_users,pasword_users,role_users,sex_users) VALUES (:nom,:prenom,:mail,:password,:role,:sexe)');
    $stmt->execute(array("nom" => $nom,"prenom" => $prenom, "mail" => $mail,"password" => $password,"role" => $role,"sexe" => $sexe));
	$valide=true;
	}
	else 
	{
		$valide=false;
	}
} 
else 
{
	$valide=false;
}

if($valide)
{
	header('Location: appartements.php');
}
else
{
	header('Location: inscription.php');
}



?>