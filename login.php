<?php ob_start(); ?>

<div class="row withoutMarginBot">	
	<div id="divTitre" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h1 id="titre" class="white-text center">Ajouter des locations</h1>
	</div>

	<div id="divTitreSmall" class="parallax-container hide-on-med-and-up valign-wrapper">
		<div class="col s10 offset-s1">
			<h3 id="titreSmall" class="white-text center">Recherche des locations</h3>
		</div>
		<!-- <div class="parallax"><img src="images/Lac_du_Bourget_et_le_Revard.min.jpg"></div> -->
	</div>

</div>
<div id="container-offre">
		<!-- ici abou sy -->
	<form action="api/login.php" method="POST" class="form">
		<input type="email" name="login" id="mail" placeholder="adresse mail" required>
		<input type="password" name="pws" id="mot_de_passe" placeholder="mot de passe" required>
		<center><button type="submit">valider</button></center>
	</form>
</div>



<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<script type="module" src="js/appartement.js"></script>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>
<script type="text/javascript">

	let form = document.querySelector('.form');

	function onSubmit(e){
		e.preventDefault();
		var mot_de_passe1= document.getElementById('mot_de_passe').value;
		var mail = document.getElementById('mail').value;

		if(mot_de_passe.length === 0 && mail.length === 0))
		{   
			alert('il faut remplir les champs!');
		}
		else
		{
			form.submit();
		}
	}
	</script>