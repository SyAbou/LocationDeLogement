<?php ob_start(); ?>


<div class="formulaire_inscription" id="container-offre">
	<div id=panel class="panel panel-primary">
	<div class="panel-heading">Inscription</div>
	<div class="panel-body">
	<form method="post" class="form" action="api/formulaire_inscription.php">
	Nom: <input type="text" name="nom" size="3">
	Prénom: <input type="text" name="prenom">
	Sexe :
	<select name="sexe" size="1">
		<option value="0" selected>Femme</option>
		<option value="1">Homme</option>
		<option value="2">Autre</option>
	</select>
	Mail: <input type="email" name="mail" id="mail">
	mot de passe: <input type="password" name="password" id="mot_de_passe1">
	COnfirmer votre mot de passe: <input type="password" name="password2" id="mot_de_passe2">
	 <center><button type="submit">valider</button></center>
		</form>
				</div>
				<div class="panel-footer hide"></div>
			</div>

</div>
		
<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<script type="module" src="js/appartement.js"></script>
	<script type="module" src="js/inscription.js"></script>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>

