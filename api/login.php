<?php
include 'config.php';
$mail = $_POST['login'];
$pws = $_POST['pws'];
$req=$db->prepare('SELECT pasword_users  FROM users WHERE mail_users =:mail');
$req->execute(array("mail" => $mail));
$data = $req->fetch();
	if($data['pasword'] == $pws)
	{	$req_1=$db->prepare('SELECT * FROM users WHERE mail_users =:mail');
		$req->execute(array("mail" => $mail));
		$data = $req->fetch();
		session_start();
		$_SESSION['id']     = $data['id_users'];
		$_SESSION['mail']   = $data['mail_users'];
		$_SESSION['role']   = $data['role_users'];
		$_SESSION['nom']    = $data['nom_users'];
		$_SESSION['prenom'] = $data['prenom_users'];
		header('Location: ../appartements.php');
	}
	
	else
	{
		header('Location: ../login.php');
	}
?>