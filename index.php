<?php ob_start(); ?>

<div class="row withoutMarginBot">
	<div id="divTitre" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h6 id="nom" class="white-text center">Groupe ASSON</h6>
		<h1 id="titre" class="white-text center">Lorem Ipsum</h1>
		
	</div>

	<div id="divTitreSmall" class="parallax-container hide-on-med-and-up valign-wrapper">
		<div class="col s10 offset-s1">
			<h3 id="titreSmall" class="white-text center">Lorem Ipsum</h3>
		</div>
		<div class="parallax"><img src="images/Lac_du_Bourget_et_le_Revard.min.jpg"></div>
	</div>

	<div class="col l6 m8 s12 offset-l3 offset-m2 white center description">
		<h5 class="grey-text text-darken-1">Lorem Ipsum</h5>
		<br>
		<p class="grey-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	</div>

	<div class="col l2 m8 s12 offset-l3 offset-m2 primary center description hauteur260">
		<h5 class="white-text">Lorem Ipsum</h5>
		<br>
		<hr width="50px">
	</div>
	<div id="divImageSalon" class="col l4 m8 s12 offset-m2 hauteur260"></div>

	<div id="divImageChambre" class="col l2 m8 s12 offset-l3 offset-m2 hauteur260 hide-on-med-and-down"></div>
	<div class="col l4 m8 s12 offset-m2 white center description hauteur260">
		<p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
		<br>
		<a class="btn-flat waves-effect primary-text" href="/appartements.php">Lorem Ipsum<i class="material-icons right">chevron_right</i></a>
	</div>
</div>
<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="row withoutMarginBot">
	<div id="divImageBourget" class="col l4 m8 offset-l3 offset-m2 hauteur260 hide-on-small-only"></div>
	<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
		<div class="parallax"><img src="images/le-bourget-du-lac.min.jpg"></div>
	</div>
	<div class="col l2 m8 s12 offset-m2 primary center description hauteur260">
		<h5 class="white-text">Location</h5>
		<br>
		<hr width="50px">
	</div>

	<div class="col l6 m8 s12 offset-l3 offset-m2 white center description">
		<p class="grey-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		<br>
		<a class="btn-flat waves-effect primary-text" href="/contact.php#map">Lorem Ipsum</a>
	</div>

	<div id="about" class="col l6 m8 s12 offset-l3 offset-m2 primary white-text center">
		<h5><img src="images/avatar.png" height="50px">Lorem Ipsum</h5>
		<br>
		<hr width="50px"><br>
		<p align="justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		<br>
		<a class="btn-flat waves-effect white-text" href="/contact.php">Lorem Ipsum<i class="material-icons right">Lorem Ipsum</i></a>
	</div>
</div>

<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>