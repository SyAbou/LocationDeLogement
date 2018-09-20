<?php ob_start(); ?>


<div class="formulaire_inscription" id="container">
	<div id=panel class="panel panel-primary">
	<div class="panel-heading">Inscription</div>
	<div class="panel-body">
	<form method="post" class="myform" action="formulaire_inscription.php">
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

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>

<script type="text/javascript">

	let form = document.querySelector('.myform');

	form.addEventListener('submit', onSubmit);

	function onSubmit(e){
		e.preventDefault();
		let valid = true;
		var mot_de_passe1= document.getElementById('mot_de_passe1').value;
		var mot_de_passe2= document.getElementById('mot_de_passe2').value;
		var mail = document.getElementById('mail');
		//console.log(verifMail(mail));
		//console.log((mot_de_passe1 == mot_de_passe2));
		if((mot_de_passe1 == mot_de_passe2) && verifMail(mail))
		{   
			valid = true;
		}
		else
		{
			alert("Verification");
			valid = false;
		}

		if(valid){
			form.submit();
		}
	}

	function verifMail(champ)
{
   var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

   if(!regex.test(champ.value))
   {
      //surligne(champ, true);
      return false;
   }
   else
   {
      //surligne(champ, false);
      return true;
   }
}


</script>